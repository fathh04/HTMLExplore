@extends('layout.master')
@section('title', 'Masuk Kelas - Akadia')
@section('menuKelas', 'active')
@section('content')
<div class="container py-5">
    <h1 class="h3 fw-bold text-center mb-4">Kelas: {{ $kelas->pelajaran }}</h1>
    <p class="text-center">ID Kelas: {{ $kelas->idkelas }}</p>

    <!-- Navigasi Tab -->
    <ul class="nav nav-pills justify-content-center mb-4" id="kelasTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active px-4 py-2" id="jelajah-tab" data-bs-toggle="tab" data-bs-target="#jelajah" type="button" role="tab" aria-controls="jelajah" aria-selected="true">
                <i class="bi bi-search me-2"></i>Jelajah
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-4 py-2" id="kuis-tab" data-bs-toggle="tab" data-bs-target="#kuis" type="button" role="tab" aria-controls="kuis" aria-selected="false">
                <i class="bi bi-question-circle me-2"></i>Kuis
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-4 py-2" id="leaderboard-tab" data-bs-toggle="tab" data-bs-target="#leaderboard" type="button" role="tab" aria-controls="leaderboard" aria-selected="false">
                <i class="bi bi-trophy me-2"></i>Leaderboard
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-4 py-2" id="informasi-tab" data-bs-toggle="tab" data-bs-target="#informasi" type="button" role="tab" aria-controls="informasi" aria-selected="false">
                <i class="bi bi-collection me-2"></i>Feed Pembelajaran
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-4 py-2" id="buatfeed-tab" data-bs-toggle="tab" data-bs-target="#buatfeed" type="button" role="tab" aria-controls="buatfeed" aria-selected="false">
                <i class="bi bi-pencil-square me-2"></i>Buat Feed
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="kelasTabContent">
        <!-- Tab Jelajah -->
        <div class="tab-pane fade show active" id="jelajah" role="tabpanel" aria-labelledby="jelajah-tab">
            <div class="accordion" id="materiAccordion">
                @if ($materi->isEmpty())
                <p>Materi tidak ditemukan.</p>
            @else
                @foreach ($materi as $m)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $m->id }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $m->id }}" aria-expanded="false" aria-controls="collapse{{ $m->id }}">
                                {{ $m->judul }}
                            </button>
                        </h2>
                        <div id="collapse{{ $m->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $m->id }}" data-bs-parent="#materiAccordion">
                            <div class="accordion-body">
                                <p>{{ $m->deskripsi }}</p>
                                <a href="{{ asset('storage/' . $m->file_materi) }}" target="_blank" class="btn btn-primary mt-3">Lihat Materi</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            </div>
        </div>

        <!-- Tab Kuis -->
        <div class="tab-pane fade" id="kuis" role="tabpanel" aria-labelledby="kuis-tab">
            <div class="card shadow-lg border-0 mt-4 hover-effect rounded">
                <div class="card-body">
                    <h3 class="text-center mb-4 fw-bold text-primary">Kuis Menarik</h3>
                    <p class="text-center text-muted">Uji pengetahuanmu melalui kuis seru yang telah disiapkan!</p>
                    <div class="text-center mt-4">
                        <!-- Tombol untuk membuka modal kuis -->
                        <button class="btn btn-warning btn-lg shadow hover-effect text-white" data-bs-toggle="modal" data-bs-target="#kuisModal">
                            Mulai Kuis
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Leaderboard -->
        <div class="tab-pane fade" id="leaderboard" role="tabpanel" aria-labelledby="leaderboard-tab">
            <h3 class="mb-3 text-center">Peringkat Siswa Terbaik</h3>
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-person-circle me-2"></i>Kelompok 4</span>
                            <span class="badge bg-success rounded-pill">95</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-person-circle me-2"></i>Kelompok 5</span>
                            <span class="badge bg-success rounded-pill">92</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-person-circle me-2"></i>Kelompok 1</span>
                            <span class="badge bg-success rounded-pill">90</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Tab Feed Pembelajaran -->
        <div class="tab-pane fade" id="informasi" role="tabpanel" aria-labelledby="informasi-tab">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Feed Card 1 -->
                    <div class="card shadow-sm mb-4">
                        <div class="ratio" style="--bs-aspect-ratio: 100%;">
                            <img src="{{ asset('img/peta.jpg') }}" class="card-img-top object-fit-cover" alt="Postingan" style="height: 100%; width: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Responsive Website</h5>
                            <p class="card-text">Saya berhasil membuat layout responsive dengan Bootstrap! 😄</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-outline-danger btn-sm">❤️ 20 Suka</button>
                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#feedComment1">💬 Komentar</button>
                            </div>
                            <!-- Komentar Collapse (Contoh untuk Feed Card 1) -->
                            <div class="collapse mt-2" id="feedComment1">
                                <div class="border rounded p-2">
                                    <p><strong>Rina:</strong> Keren banget tampilannya!</p>
                                    <div class="input-group mt-2">
                                        <input type="text" class="form-control form-control-sm" placeholder="Tulis komentar...">
                                        <button class="btn btn-sm btn-success" type="button">
                                            <i class="bi bi-send"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Feed Card 2 -->
                    <div class="card shadow-sm mb-4">
                        <div class="ratio" style="--bs-aspect-ratio: 100%;">
                            <img src="{{ asset('img/peta.jpg') }}" class="card-img-top object-fit-cover" alt="Postingan" style="height: 100%; width: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Belajar CSS Grid</h5>
                            <p class="card-text">Hari ini belajar tentang CSS Grid Layout, seru banget! 🔥</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-outline-danger btn-sm">❤️ 12 Suka</button>
                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#feedComment2">💬 Komentar</button>
                            </div>
                            <!-- Komentar Collapse (Contoh untuk Feed Card 1) -->
                            <div class="collapse mt-2" id="feedComment2">
                                <div class="border rounded p-2">
                                    <p><strong>Rina:</strong> Keren banget tampilannya!</p>
                                    <div class="input-group mt-2">
                                        <input type="text" class="form-control form-control-sm" placeholder="Tulis komentar...">
                                        <button class="btn btn-sm btn-success" type="button">
                                            <i class="bi bi-send"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Buat Feed -->
        <div class="tab-pane fade" id="buatfeed" role="tabpanel" aria-labelledby="buatfeed-tab">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center mb-4">Buat Feed Baru</h3>
                    <form method="POST" action="{{ route('feed.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Feed</label>
                            <input type="text" name="judul" id="judul" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Upload Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Posting Feed</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal untuk Kuis -->
        <div class="modal fade" id="kuisModal" tabindex="-1" aria-labelledby="kuisModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kuisModalLabel">Kuis Seru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Siap untuk menguji pengetahuanmu? Klik tombol di bawah untuk memulai kuis!</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Mulai Kuis</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Styling tambahan -->
<style>
    .hover-effect:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

    .btn-warning {
        background-color: #f9a825;
        color: white;
        transition: background-color 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #f57f17;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 2rem;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
    }

    .text-primary {
        color: #007bff !important;
    }

    .btn-lg {
        font-size: 1.2rem;
        padding: 12px 24px;
        border-radius: 30px;
    }
</style>

@endsection
