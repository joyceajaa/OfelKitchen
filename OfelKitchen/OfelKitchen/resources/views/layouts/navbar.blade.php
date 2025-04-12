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
            {{-- Pastikan nama route di web.php adalah 'register' --}}
            <li><a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">Registrasi</a></li>
        @endguest

        {{-- Link Hanya Untuk User yang Sudah Login --}}
        @auth
            {{-- Cek apakah user adalah Admin --}}
            @if (Auth::user()->is_admin)
                <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.*') ? 'active' : '' }}">Admin Dashboard</a></li>
                {{-- Tambahkan link admin lainnya jika perlu --}}

            {{-- Jika bukan admin (berarti pelanggan) --}}
            @else
                {{-- Pelanggan mungkin tidak perlu link khusus selain yang publik, --}}
                {{-- tapi bisa tambahkan link profil atau pesanan di sini jika ada --}}
                {{-- Contoh: <li><a href="{{ route('profile.show') }}">Profil Saya</a></li> --}}
                 {{-- Atau tampilkan nama pengguna saja --}}
                 <li style="padding: 10px 15px; color: #fff; align-self: center;"><span>Halo, {{ Auth::user()->name }}</span></li>
            @endif

            {{-- Link Logout (Tampil untuk Admin & Pelanggan yang sudah login) --}}
            <li>
                {{-- Gunakan form untuk metode POST saat logout demi keamanan (CSRF) --}}
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endauth
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
