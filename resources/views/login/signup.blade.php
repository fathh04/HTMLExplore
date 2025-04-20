<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Akadia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-container h4 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="col-md-4 mx-auto bg-white p-4 rounded shadow">
            <h4 class="text-center">Sign Up</h4>
            <form method="POST" action="{{ route('prosesdaftar') }}">
                @csrf
                <div class="mb-3 ">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control
                    @error('nama') is-invalid
                    @enderror" id="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control
                    @error('email') is-invalid
                    @enderror" id="email" placeholder="Masukkan email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control
                    @error('password') is-invalid
                    @enderror" id="password" placeholder="Masukkan Password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control
                    @error('password_confirmation') is-invalid
                    @enderror" placeholder="Masukkan konfirmasi Password" id="password_confirmation" required>
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Daftar Sebagai</label>
                    <select name="role" id="role" class="form-select @error('role') is-invalid @enderror" required>
                        <option value="siswa">Siswa</option>
                    </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </form>
            <p class="text-center mt-3">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>
</body>
</html>
