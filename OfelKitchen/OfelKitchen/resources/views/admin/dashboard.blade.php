<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Dashboard - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts (Opsional, sesuaikan dengan template Anda) -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles (Sesuaikan dengan setup Anda) -->
    {{-- Jika menggunakan Vite: --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- Atau link CSS manual: --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/your-main-styles.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/your-admin-styles.css') }}"> --}}

    <style>
        /* Contoh Styling Sederhana (Ganti/Hapus sesuai kebutuhan) */
        body { font-family: sans-serif; margin: 0; background-color: #f4f6f9; color: #333; }
        .admin-container { max-width: 1200px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .success-message { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: .75rem 1.25rem; margin-bottom: 1rem; border-radius: .25rem; }
        .admin-content h1, .admin-content h2 { color: #444; }
        .admin-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 20px; }
        .admin-card { background-color: #e9ecef; padding: 20px; border-radius: 5px; text-align: center; }
        .admin-card h3 { margin-top: 0; }

        /* --- Styling Navbar --- */
        .navmenu { background-color: #343a40; padding: 0; /* Biarkan ul yang mengatur padding */ }
        .navmenu ul { list-style: none; padding: 0 15px; margin: 0; display: flex; flex-wrap: wrap; /* Agar wrap di mobile */ justify-content: center; align-items: center; min-height: 60px; /* Tinggi minimum */ }
        .navmenu ul li { margin: 5px 10px; /* Beri sedikit margin vertikal */ }
        .navmenu ul li a { color: rgba(255, 255, 255, 0.75); text-decoration: none; padding: 10px 15px; display: block; border-radius: 4px; transition: background-color 0.3s, color 0.3s; }
        .navmenu ul li a:hover { background-color: #495057; color: #fff; }
        .navmenu ul li a.active { color: #fff; background-color: #007bff; /* Warna aktif yang lebih jelas */ }
        .navmenu ul li span { /* Styling untuk sapaan user */
            color: #adb5bd;
            padding: 10px 15px;
            display: block;
        }
        .navmenu ul li form a { /* Styling khusus untuk link logout di dalam form */
             color: rgba(255, 255, 255, 0.75);
        }
         .navmenu ul li form a:hover {
             background-color: #dc3545; /* Warna merah saat hover logout */
             color: #fff;
         }
        .mobile-nav-toggle { display: none; /* Sembunyikan di desktop */ color: white; font-size: 28px; cursor: pointer; padding: 0 15px; }
        /* Anda perlu menambahkan media query untuk menampilkan mobile-nav-toggle dan mengatur ulang layout navbar di layar kecil jika diperlukan */
        @media (max-width: 991px) {
            /* Contoh: Sembunyikan menu desktop, tampilkan tombol toggle */
            /* .navmenu ul { display: none; } */
            /* .mobile-nav-toggle { display: block; } */
            /* Style untuk menu mobile yang muncul (jika ada) */
        }
        /* --- End Styling Navbar --- */
    </style>
</head>

<body class="antialiased">

    {{-- Include Navbar Dinamis --}}
    <nav id="navmenu" class="navmenu">
        <ul>
            {{-- Link yang Selalu Tampil --}}
            <li><a href="{{ route('welcome') }}" class="{{ request()->routeIs('welcome') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('menu') }}" class="{{ request()->routeIs('menu') ? 'active' : '' }}">Menu</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
            <li><a href="{{ route('location') }}" class="{{ request()->routeIs('location') ? 'active' : '' }}">Location</a></li>
            <li><a href="{{ route('feedback') }}" class="{{ request()->routeIs('feedback') ? 'active' : '' }}">Feedback</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>

            {{-- Link Hanya Untuk Tamu (Guest) / Belum Login --}}
            @guest
                <li><a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">Login</a></li>
                <li><a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">Registrasi</a></li>
            @endguest

            {{-- Link Hanya Untuk User yang Sudah Login --}}
            @auth
                {{-- Cek apakah user adalah Admin --}}
                @if (Auth::user()->is_admin)
                    <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.*') ? 'active' : '' }}">Admin Dashboard</a></li>
                    {{-- Tambahkan link admin lainnya jika perlu --}}
                    {{-- Contoh: <li><a href="{{ route('admin.users.index') }}">Manage Users</a></li> --}}

                {{-- Jika bukan admin (berarti pelanggan) --}}
                @else
                    {{-- Pelanggan mungkin tidak perlu link khusus di sini, karena mereka ada di 'welcome' --}}
                    {{-- Atau tampilkan nama pengguna saja --}}
                    <li><span>Halo, {{ Str::limit(Auth::user()->name, 15) }}</span></li> {{-- Batasi panjang nama jika perlu --}}
                @endif

                {{-- Link Logout (Tampil untuk Admin & Pelanggan yang sudah login) --}}
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       Logout
                    </a>
                </li>
            @endauth
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i> {{-- Pastikan class ini sesuai dengan template/framework Anda jika pakai --}}
    </nav>
{{-- End Navbar Dinamis       --}}

{{-- Konten Admin Dashboard   --}}
    <div class="admin-container">
        <h1>Admin Dashboard</h1>

        {{-- Tampilkan pesan sukses (misalnya setelah login) --}}
        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <div class="admin-content">
            <h2>Selamat Datang, {{ Auth::user()->name }}!</h2>
            <p>Ini adalah area kontrol administrasi. Dari sini Anda dapat mengelola berbagai aspek situs.</p>

            {{-- Contoh Konten Dashboard (Grid Card) --}}
            <div class="admin-grid">
                <div class="admin-card">
                    <h3>Kelola Pengguna</h3>
                    <p>Lihat, edit, atau hapus data pengguna.</p>
                    {{-- <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Go</a> --}}
                    <a href="#" class="btn btn-primary">Go</a> {{-- Ganti '#' dengan route yang sesuai --}}
                </div>
                <div class="admin-card">
                    <h3>Kelola Menu</h3>
                    <p>Tambah, edit, atau hapus item menu.</p>
                    {{-- <a href="{{ route('admin.menu.index') }}" class="btn btn-primary">Go</a> --}}
                    <a href="#" class="btn btn-primary">Go</a> {{-- Ganti '#' dengan route yang sesuai --}}
                </div>
                <div class="admin-card">
                    <h3>Lihat Feedback</h3>
                    <p>Baca feedback yang dikirim oleh pengguna.</p>
                    {{-- <a href="{{ route('admin.feedback.index') }}" class="btn btn-primary">Go</a> --}}
                    <a href="#" class="btn btn-primary">Go</a> {{-- Ganti '#' dengan route yang sesuai --}}
                </div>
                 <div class="admin-card">
                    <h3>Pengaturan Situs</h3>
                    <p>Konfigurasi pengaturan umum situs.</p>
                    {{-- <a href="{{ route('admin.settings.index') }}" class="btn btn-primary">Go</a> --}}
                    <a href="#" class="btn btn-primary">Go</a> {{-- Ganti '#' dengan route yang sesuai --}}
                </div>
                {{-- Tambahkan card lain sesuai kebutuhan --}}
            </div>
        </div>
    </div>
    {{-- End Konten Admin Dashboard --}}

    {{-- Tambahkan script JS Anda di sini jika perlu --}}
    {{-- <script src="{{ asset('js/your-admin-scripts.js') }}"></script> --}}

</body>
</html>
