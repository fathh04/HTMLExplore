@extends('layout.master')
@section('title', 'Beranda Siswa - HTMLExplore')
@section('menuBeranda', 'active')

@section('content')
<div class="container py-4">
    <h1 class="h4 fw-bold">Selamat Datang, {{ session('user_name') }}</h1>
    <p class="text-muted">Ini adalah beranda siswa.</p>

    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-box bg-primary">
                <h2>5</h2>
                <p>Kelas Diikuti</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-box bg-success">
                <h2>12</h2>
                <p>Materi Diselesaikan</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-box bg-warning">
                <h2>8</h2>
                <p>Tugas Selesai</p>
            </div>
        </div>
    </div>
</div>
@endsection
