<header class="navbar">
    <div class="container navbar-inner">
        <a href="{{ route('beranda') }}" class="brand">
            <span class="brand-mark">☀</span>
            Surya Nusantara Energi
        </a>
        <nav>
            <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang</a>
            <a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan*') ? 'active' : '' }}">Layanan</a>
            <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a>
        </nav>
    </div>
</header>