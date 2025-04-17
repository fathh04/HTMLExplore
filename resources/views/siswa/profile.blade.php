@extends('layout.master')
@section('title', 'Profile - Akadia')
@section('menuProfile', 'active')

@section('content')
<div class="container py-5">
    <h1 class="h4 fw-bold text-center text-primary mb-4">Profile Akadia</h1>

    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card shadow-lg rounded-3">
                <div class="row g-0">
                    <!-- Foto Profil -->
                    <div class="col-md-4 bg-primary text-white d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/profile.jpg') }}" alt="Profile" class="img-fluid rounded-circle" style="width: 120px; height: 120px;">
                    </div>

                    <!-- Info Pengguna -->
                    <div class="col-md-8 p-4">
                        <h3 class="fw-bold text-primary">{{ session('user_name') }}</h3>
                        <p class="text-muted">Siswa</p>

                        <div class="mt-4">
                            <h5 class="text-secondary">Informasi Pribadi</h5>
                            <ul class="list-unstyled">
                                <li><strong>Nama:</strong> {{ session('user_name') }}</li>
                                <li><strong>Email:</strong> andifathh04@gmail.com</li>
                            </ul>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                <i class="bi bi-pencil"></i> Edit Profile
                            </button>
                            <a href="/login" class="btn btn-outline-danger">
                                <i class="bi bi-box-arrow-right"></i> Keluar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Profile -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" value="Kelompok 4">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="kelompok4@akadia.com">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* General container style */
    .container {
        background: linear-gradient(145deg, #f9f9f9, #e0e0e0);
        border-radius: 10px;
        padding: 40px;
    }

    /* Card style */
    .card {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* Profile image */
    .profile-img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }

    .modal-content {
        border-radius: 15px;
    }

    .modal-header {
        background-color: #f8f9fa;
    }

    .btn-outline-primary, .btn-outline-danger {
        width: 48%;
    }
</style>
@endsection
