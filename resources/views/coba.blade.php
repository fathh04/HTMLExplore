<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed Pembelajaran - HTMLXplore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">HTMLXplore</a>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">+ Unggah Postingan</button>
    </div>
</nav>

<!-- Feed Pembelajaran -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Postingan 1 -->
            <div class="card mb-3">
                <img src="https://source.unsplash.com/600x300/?coding,technology" class="card-img-top" alt="Hasil Coding">
                <div class="card-body">
                    <h5 class="card-title">Desain Web Responsive</h5>
                    <p class="card-text">Saya baru saja membuat desain website dengan HTML & CSS! 🚀</p>
                    <button class="btn btn-outline-danger btn-sm">❤️ 15 Suka</button>
                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#comments1">💬 5 Komentar</button>

                    <!-- Komentar -->
                    <div id="comments1" class="collapse mt-2">
                        <div class="border p-2 rounded">
                            <p><strong>Aldi:</strong> Keren banget!🔥</p>
                            <p><strong>Siti:</strong> Bagaimana cara membuatnya?</p>
                            <input type="text" class="form-control form-control-sm" placeholder="Tulis komentar...">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Postingan 2 -->
            <div class="card mb-3">
                <img src="https://source.unsplash.com/600x300/?code,developer" class="card-img-top" alt="Hasil Coding">
                <div class="card-body">
                    <h5 class="card-title">Navbar Bootstrap</h5>
                    <p class="card-text">Navbar dengan Bootstrap 5 yang responsif dan keren! ✨</p>
                    <button class="btn btn-outline-danger btn-sm">❤️ 10 Suka</button>
                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#comments2">💬 3 Komentar</button>

                    <!-- Komentar -->
                    <div id="comments2" class="collapse mt-2">
                        <div class="border p-2 rounded">
                            <p><strong>Budi:</strong> Mantap bro!💯</p>
                            <input type="text" class="form-control form-control-sm" placeholder="Tulis komentar...">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal Unggah Postingan -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Unggah Postingan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="Masukkan judul">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" rows="3" placeholder="Jelaskan hasil coding Anda"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Unggah Gambar</label>
                        <input type="file" class="form-control" id="gambar">
                    </div>
                    <button type="submit" class="btn btn-primary">Unggah</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
