<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog UMKM Siswa SMK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --solid-blue: #70b4f8;
            --solid-pink: #f8a8c8;
            --solid-pink-dark: #f38cb8;
            --bg-light: #f8fafc;
            --text-dark: #2d3748;
        }

        body {
            background-color: var(--bg-light);
            color: var(--text-dark);
            font-family: 'Poppins', sans-serif;
        }

        .navbar-custom {
            background-color: var(--solid-blue) !important;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #0e5ae7 !important;
        }

        .navbar-custom .nav-link:hover {
            color: #f07da3 !important;
        }


        .btn-admin-pink {
            background-color: var(--solid-pink-dark) !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 8px;
            font-weight: 600;
        }

        .btn-admin-pink:hover {
            background-color: #e872a3 !important;
            color: #ffffff !important;
        }

        /* Hero / Banner Welcoming Polos Warna Pink */
        .bg-primary, .hero-banner {
            background-color: var(--solid-pink) !important;
            border: none !important;
            border-radius: 16px !important;
            color: #2d3748 !important;
            box-shadow: none !important;
        }

        .bg-primary h1, .bg-primary p,
        .hero-banner h1, .hero-banner p {
            color: #2d3748 !important;
        }

        /* Tombol di dalam Banner Warna Biru Polos */
        .bg-primary .btn, .hero-banner .btn {
            background-color: var(--solid-blue) !important;
            border-color: var(--solid-blue) !important;
            color: #ffffff !important;
            font-weight: 600;
            border-radius: 8px;
        }

        .bg-primary .btn:hover, .hero-banner .btn:hover {
            background-color: #519df2 !important;
        }

        /* Card Produk Simple */
        .card {
            border: 1px solid #e2e8f0 !important;
            border-radius: 12px !important;
            box-shadow: none !important;
        }

        .card-header {
            background-color: var(--solid-blue) !important;
            color: #ffffff !important;
            font-weight: 600;
        }

        /* Badges Polos */
        .badge, .bg-info {
            background-color: var(--solid-blue) !important;
            color: #ffffff !important;
            font-weight: 600;
            border-radius: 6px;
        }

        /* Table Admin Header Polos Biru */
        .table thead {
            background-color: var(--solid-blue) !important;
        }

        .table thead th {
            color: #ffffff !important;
            border: none;
            font-weight: 600;
        }

        /* Button Standard */
        .btn-primary {
            background-color: var(--solid-blue) !important;
            border-color: var(--solid-blue) !important;
            color: #ffffff !important;
        }

        .btn-warning {
            background-color: var(--solid-pink) !important;
            border-color: var(--solid-pink) !important;
            color: #ffffff !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('produk.home') }}">Katalog UMKM SMK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('produk.home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('produk.index') }}">Katalog</a></li>
                    <li class="nav-item ms-2"><a class="btn btn-admin-pink fw-bold px-3 py-2" href="{{ route('produk.admin') }}">Halaman Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
