<header class="navbar">
    <div class="container navbar-inner">
        <a href="{{ route('beranda') }}" class="brand">
            <span class="brand-name">Nusantara Clean <span>Energy</span></span>
        </a>
        <nav aria-label="Navigasi utama">
            <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang</a>
            <a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan*') ? 'active' : '' }}">Layanan</a>
            <a href="{{ route('edukasi') }}" class="{{ request()->routeIs('edukasi') ? 'active' : '' }}">Edukasi</a>
            <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a>
        </nav>
        <a href="{{ route('kontak') }}" class="nav-cta">Konsultasi <span aria-hidden="true">↗</span></a>
    </div>
</header>