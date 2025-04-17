@extends('layout.masterGuru')
@section('title', 'Kelola Kelas - Akadia')
@section('menuKelas', 'active')
@section('content')
<div class="container py-5">
    <h1 class="h3 fw-bold text-center mb-4">Kelola Kelas: Tambah Materi dan Buat Kuis</h1>

    <ul class="nav nav-pills justify-content-center mb-4" id="kelasTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active px-4 py-2" id="tambah-materi-tab" data-bs-toggle="tab" data-bs-target="#tambah-materi" type="button" role="tab" aria-controls="tambah-materi" aria-selected="true">
                <i class="bi bi-plus-circle me-2"></i>Tambah Materi
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-4 py-2" id="buat-kuis-tab" data-bs-toggle="tab" data-bs-target="#buat-kuis" type="button" role="tab" aria-controls="buat-kuis" aria-selected="false">
                <i class="bi bi-pencil-square me-2"></i>Buat Kuis
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-4 py-2" id="leaderboard-tab" data-bs-toggle="tab" data-bs-target="#leaderboard" type="button" role="tab" aria-controls="leaderboard" aria-selected="false">
                <i class="bi bi-trophy me-2"></i>Leaderboard
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-4 py-2" id="informasi-tab" data-bs-toggle="tab" data-bs-target="#informasi" type="button" role="tab" aria-controls="informasi" aria-selected="false">
                <i class="bi bi-info-circle me-2"></i>Informasi
            </button>
        </li>
    </ul>

    <div class="tab-content" id="kelasTabContent">


        <div class="tab-pane fade" id="buat-kuis" role="tabpanel" aria-labelledby="buat-kuis-tab">
            <div class="text-center mt-4">
                <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#modalBuatKuis">
                    <i class="bi bi-pencil-square me-2"></i>Buat Kuis Baru
                </button>
            </div>
        </div>

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
                            <span class="badge bg-success rounded-pill">95</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="informasi" role="tabpanel" aria-labelledby="informasi-tab">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="mb-3">Informasi Kelas</h3>
                    <p>Platform Akadia memberikan berbagai pilihan kelas menarik yang dirancang untuk membantu siswa mencapai potensi penuh mereka.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Materi -->
<div class="modal fade" id="modalTambahMateri" tabindex="-1" aria-labelledby="modalTambahMateriLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahMateriLabel">Tambah Materi Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Materi</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Materi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="file_materi" class="form-label">Unggah Materi (PDF)</label>
                        <input type="file" class="form-control" id="file_materi" name="file_materi" accept=".pdf" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Materi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Buat Kuis -->
<div class="modal fade" id="modalBuatKuis" tabindex="-1" aria-labelledby="modalBuatKuisLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBuatKuisLabel">Buat Kuis Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="judul_kuis" class="form-label">Judul Kuis</label>
                        <input type="text" class="form-control" id="judul_kuis" name="judul_kuis" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_kuis" class="form-label">Deskripsi Kuis</label>
                        <textarea class="form-control" id="deskripsi_kuis" name="deskripsi_kuis" rows="5" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning text-white">Buat Kuis</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="tab-pane fade show active" id="tambah-materi" role="tabpanel" aria-labelledby="tambah-materi-tab">
    <div class="text-center mt-4 mb-4">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahMateri">
            <i class="bi bi-plus-circle me-2"></i>Tambah Materi Baru
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materi as $m)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $m->judul }}</td>
        <td>{{ $m->deskripsi }}</td>
        <td>
            <a href="{{ asset('storage/' . $m->file_materi) }}" target="_blank" class="btn btn-sm btn-warning">
                Lihat Materi
            </a>
            <form action="{{ route('materi.destroy', ['idkelas' => $kelas->id, 'id' => $m->id]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')

    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusMateri{{ $m->id }}">
        <i class="bi bi-trash"></i> Hapus
    </button>

<div class="modal fade" id="modalHapusMateri{{ $m->id }}" tabindex="-1" aria-labelledby="modalHapusMateriLabel{{ $m->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapusMateriLabel{{ $m->id }}">Konfirmasi Penghapusan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus materi <strong>{{ $m->judul }}</strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form action="{{ route('materi.destroy', ['idkelas' => $kelas->id, 'id' => $m->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

            </form>
        </td>

    </tr>
@endforeach

            </tbody>
        </table>
    </div>
</div>


<style>
    .modal-header {
        background-color: #f8f9fa;
    }

    .btn-warning {
        background-color: #f9a825;
        color: white;
        transition: background-color 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #f57f17;
    }
</style>
@endsection
