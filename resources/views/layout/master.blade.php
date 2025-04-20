<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<!-- Modal Konfirmasi Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin ingin logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                <!-- Form Logout -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Ya, Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
<body class="bg-light">
    <div class="sidebar" id="sidebar">
        <div class="text-center py-3">
            <span class="fw-bold fs-4">HTMLExplore</span>
        </div>
        <div class="menu-item text-white @yield('menuBeranda')" onclick="location.href='{{ route('beranda') }}'">
            <i class="bi bi-house-door"></i> <span>Beranda</span>
        </div>
        <div class="menu-item text-white @yield('menuPetunjuk')" onclick="location.href='{{ route('petunjuk') }}'">
            <i class="bi bi-code-square"></i> <span>Petunjuk</span>
        </div>
        <div class="menu-item text-white @yield('menuKelas')" onclick="location.href='{{ route('kelas') }}'">
            <i class="bi bi-collection"></i> <span>Kelas</span>
        </div>
        <div class="menu-item text-white @yield('menuCPdanTP')" onclick="location.href='{{ route('CPdanTP') }}'">
            <i class="bi bi-clipboard-check-fill"></i> <span>CP dan TP</span>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container-fluid">
            <button class="btn btn-light me-3" id="toggleSidebar">
                <i class="bi bi-list"></i>
            </button>
            <a class="navbar-brand">
                <img src="{{ asset ('img/logoakadia.png') }}" alt="Logo" style="height: 30px; margin-right: 10px;">
                HTMLExplore
            </a>
            <div class="dropdown ms-auto">
                <button class="btn btn-white d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset ('img/profile.jpg')}}" alt="Profile" class="profile-img me-2">
                    <span>{{ session('user_name') }}</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a href="#" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            Logout
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content" id="mainContent">
            @yield('content')
    </div>
    <script>
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');

        toggleSidebar.addEventListener('click', () => {
            sidebar.classList.toggle('minimized');
            mainContent.classList.toggle('minimized');
        });
    </script>
</body>
</html>
