@extends('layout.masterGuru')
@section('title', 'Dashboard Guru - Akadia')
@section('menuBeranda', 'active')

@section('content')
<div class="container py-4">
    <div class="mb-4">
        <h1 class="h4 fw-bold">Hi, {{ session('user_name') }}</h1>
        <p class="text-muted">Atur kelas anda dengan mudah</p>
    </div>

    <div class="row text-center g-4">
        <div class="col-md-3">
            <div class="stat-box bg-warning shadow">
                <h2>2</h2>
                <p>Jumlah Kelas Aktif</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-box bg-primary text-white shadow">
                <h2>90</h2>
                <p>Siswa Terdaftar</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-box bg-danger text-white shadow">
                <h2>92</h2>
                <p>Jumlah tugas yang dikirim</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-box bg-secondary text-white shadow">
                <h2>126</h2>
                <p>Jumlah siswa aktif</p>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h3 class="fw-bold">Daftar Kelas</h3>
        <div class="card p-4 mt-3 shadow">
            @foreach ($kelas as $item)
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="fw-bold text-dark">{{ $item->pelajaran }}</h5>
                    <p class="text-muted mb-0">{{ $item->idkelas }}</p>
                </div>
                <a href="{{ route('kelas.masuk', $item->id) }}" class="btn btn-warning text-white">Lihat</a>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
