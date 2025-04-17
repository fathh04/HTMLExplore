<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\pengguna;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        session()->flash('email', $request->email);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            $user = pengguna::where('email', $request->email)->first();

            if (!$user) {
                return back()->withErrors(['email' => 'Email tidak ditemukan dalam database.']);
            }

            if (!Hash::check($request->password, $user->password)) {
                return back()->withErrors(['password' => 'Password salah.']);
            }

            Auth::login($user);
            session([
                'user_name' => $user->nama,
                'email' => $user->email,
                'role' => $user->role,
            ]);

            if ($user->role === 'guru') {
                return redirect()->route('guru.index')->with('success', 'Login berhasil sebagai Guru.');
            } elseif ($user->role === 'siswa') {
                return redirect()->route('beranda')->with('success', 'Login berhasil sebagai Siswa.');
            }
            return back()->withErrors(['role' => 'Role pengguna tidak valid.']);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi error: ' . $e->getMessage()]);
        }
    }


    public function showSignUpForm()
    {
        return view('login.signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pengguna',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:guru,siswa',
        ]);

        try {
            $pengguna = new pengguna();
            $pengguna->nama = $request->nama;
            $pengguna->email = $request->email;
            $pengguna->password = Hash::make($request->password);
            $pengguna->role = $request->role;
            $pengguna->save();

            return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }

    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();       // invalidate session lama
    $request->session()->regenerateToken();  // ganti CSRF token
    $request->session()->flush();            // hapus semua isi session
    return redirect()->route('login')->with('success', 'Berhasil logout.');
}


}
