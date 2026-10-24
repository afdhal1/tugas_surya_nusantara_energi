@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <div class="hero-copy">
                <div class="eyebrow"><span></span> Energi surya untuk Indonesia</div>
                <h1>Energi yang lebih baik, <em>dimulai dari atap Anda.</em></h1>
                <p>Kami merancang dan memasang sistem tenaga surya yang sesuai dengan kebutuhan rumah, bisnis, dan industri Anda.</p>

                <div class="hero-actions">
                    <a href="{{ route('kontak') }}" class="btn btn-primary">Diskusikan kebutuhan <span aria-hidden="true">↗</span></a>
                    <a href="{{ route('layanan') }}" class="btn btn-secondary">Jelajahi layanan</a>
                </div>

                <div class="hero-note">
                    <span class="hero-note-line"></span>
                    Dari konsultasi awal hingga sistem siap digunakan.
                </div>
            </div>

            <div class="hero-visual">
                <img
                    src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=1400&q=85"
                    alt="Panel surya terpasang di atap, menangkap cahaya matahari"
                    fetchpriority="high"
                >
                <div class="visual-caption">
                    <span class="caption-mark" aria-hidden="true">NCE</span>
                    <span><strong>Dirancang untuk kebutuhan Anda</strong><small>Rumah · Bisnis · Industri</small></span>
                </div>
            </div>
        </div>
    </section>

    <section class="info-grid">
        <div class="info-card">
            <span class="info-index">01</span>
            <div><h3>Dimulai dari kebutuhan</h3><p>Solusi disesuaikan dengan pola pemakaian dan kondisi lokasi Anda.</p></div>
        </div>
        <div class="info-card">
            <span class="info-index">02</span>
            <div><h3>Perhitungan yang jelas</h3><p>Ruang lingkup dan estimasi dibicarakan sebelum pekerjaan dimulai.</p></div>
        </div>
        <div class="info-card">
            <span class="info-index">03</span>
            <div><h3>Dukungan berkelanjutan</h3><p>Kami tetap mendampingi setelah sistem terpasang dan digunakan.</p></div>
        </div>
    </section>

    <div class="section-head">
        <div>
            <div class="section-tag">Keunggulan</div>
            <h2>Layanan Unggulan</h2>
        </div>
    </div>

    <div class="grid">
        @foreach ($layanan as $slug => $item)
            <article class="card">
                <span class="card-index">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                <h3>{{ $item['nama'] }}</h3>
                <p>{{ $item['ringkasan'] }}</p>
                <a href="{{ route('layanan.detail', $slug) }}" class="card-link">Lihat detail <span aria-hidden="true">↗</span></a>
            </article>
        @endforeach
    </div>

    <section class="products-section" aria-labelledby="product-examples-title">
        <div class="section-head">
            <div>
                <div class="section-tag">Pilihan produk</div>
                <h2 id="product-examples-title">Komponen yang bekerja bersama</h2>
            </div>
            <p class="products-intro">Contoh produk untuk membangun sistem energi yang sesuai dengan kebutuhan Anda.</p>
        </div>

        <div class="products-grid">
            <article class="product-card">
                <div class="product-art product-art-panel" aria-hidden="true">
                    <span class="product-art-label">01 / GENERATE</span>
                    <svg viewBox="0 0 180 140" fill="none">
                        <path d="m35 83 15-47h82l15 47H35Z" fill="currentColor" fill-opacity=".13" stroke="currentColor" stroke-width="2"/>
                        <path d="M57 36 45 83m27-47L63 83m29-47v47m28-47 12 47M43 59h98M39 72h106" stroke="currentColor" stroke-width="1.5"/>
                        <path d="m79 83-8 24m30-24 8 24M65 108h57" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="137" cy="36" r="11" fill="#efc47d"/>
                    </svg>
                </div>
                <div class="product-card-copy">
                    <span class="product-type">Modul fotovoltaik</span>
                    <h3>Panel Surya</h3>
                    <p>Menangkap cahaya matahari untuk menghasilkan listrik bagi rumah maupun bangunan usaha.</p>
                    <a href="{{ route('kontak') }}" class="card-link">Tanyakan produk <span aria-hidden="true">↗</span></a>
                </div>
            </article>
            <article class="product-card">
                <div class="product-art product-art-inverter" aria-hidden="true">
                    <span class="product-art-label">02 / CONVERT</span>
                    <svg viewBox="0 0 180 140" fill="none">
                        <rect x="57" y="20" width="66" height="100" rx="8" fill="currentColor" fill-opacity=".11" stroke="currentColor" stroke-width="2"/>
                        <rect x="68" y="32" width="44" height="24" rx="3" fill="#f7f6f0" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M75 44h8m6 0h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="m94 67-12 18h10l-5 17 17-23H94l7-12Z" fill="#d87845"/>
                        <circle cx="90" cy="110" r="2" fill="currentColor"/>
                    </svg>
                </div>
                <div class="product-card-copy">
                    <span class="product-type">Pengubah daya</span>
                    <h3>Inverter</h3>
                    <p>Mengubah listrik dari panel agar dapat digunakan oleh peralatan listrik di bangunan Anda.</p>
                    <a href="{{ route('kontak') }}" class="card-link">Tanyakan produk <span aria-hidden="true">↗</span></a>
                </div>
            </article>
            <article class="product-card">
                <div class="product-art product-art-battery" aria-hidden="true">
                    <span class="product-art-label">03 / STORE</span>
                    <svg viewBox="0 0 180 140" fill="none">
                        <rect x="47" y="40" width="86" height="65" rx="8" fill="currentColor" fill-opacity=".11" stroke="currentColor" stroke-width="2"/>
                        <path d="M133 60h8v25h-8" stroke="currentColor" stroke-width="2"/>
                        <rect x="59" y="52" width="62" height="41" rx="4" fill="#f7f6f0" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M90 58 77 77h11l-4 12 18-22H91l6-9Z" fill="#d87845"/>
                        <path d="M58 115h64" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="product-card-copy">
                    <span class="product-type">Penyimpanan energi</span>
                    <h3>Baterai</h3>
                    <p>Menyimpan energi untuk sistem hybrid dan membantu menyediakan cadangan daya sesuai desain sistem.</p>
                    <a href="{{ route('kontak') }}" class="card-link">Tanyakan produk <span aria-hidden="true">↗</span></a>
                </div>
            </article>
            <article class="product-card">
                <div class="product-art product-art-light" aria-hidden="true">
                    <span class="product-art-label">04 / ILLUMINATE</span>
                    <svg viewBox="0 0 180 140" fill="none">
                        <path d="M84 27v91m0-73h43c7 0 12 5 12 12v4" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                        <path d="M128 58h24l-5 13h-24l5-13Z" fill="#efc47d" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        <path d="m128 46 5-9m8 9 2-10m9 11 7-7M72 118h24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="m49 53 17-12 15 12" fill="#fffefa" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        <path d="m54 51-3 10h28l-3-10" fill="currentColor" fill-opacity=".15" stroke="currentColor" stroke-width="1.5"/>
                    </svg>
                </div>
                <div class="product-card-copy">
                    <span class="product-type">Penerangan luar ruang</span>
                    <h3>Lampu Jalan Surya</h3>
                    <p>Penerangan mandiri bertenaga surya untuk jalan, area parkir, dan fasilitas umum.</p>
                    <a href="{{ route('kontak') }}" class="card-link">Tanyakan produk <span aria-hidden="true">↗</span></a>
                </div>
            </article>
        </div>
        <p class="product-note">Contoh kategori produk. Spesifikasi dan ketersediaan dikonfirmasi saat konsultasi.</p>
    </section>

    <section class="process-section">
        <div class="section-head">
            <div>
                <div class="section-tag">Proses</div>
                <h2>Cara kerja kami</h2>
            </div>
        </div>

        <div class="process-grid">
            <div class="process-step">
                <span>01</span>
                <h3>Survey kebutuhan</h3>
                <p>Kami memetakan kebutuhan konsumsi energi, lokasi, dan potensi instalasi yang paling optimal.</p>
            </div>
            <div class="process-step">
                <span>02</span>
                <h3>Desain solar</h3>
                <p>Tim teknis membuat konfigurasi yang tepat untuk efisiensi maksimal dan estimasi penghematan.</p>
            </div>
            <div class="process-step">
                <span>03</span>
                <h3>Instalasi & monitoring</h3>
                <p>Proses pemasangan dilakukan profesional lalu dilanjutkan pemantauan performa secara berkala.</p>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="section-head">
            <div>
                <div class="section-tag">FAQ</div>
                <h2>Pertanyaan umum</h2>
            </div>
        </div>

        <div class="faq-list">
            <div class="faq-item open">
                <button class="faq-question" type="button" aria-expanded="true">
                    Berapa lama proses instalasi panel surya?
                </button>
                <div class="faq-answer">
                    Umumnya proses survei hingga instalasi selesai membutuhkan waktu 2–6 minggu tergantung skala proyek dan persetujuan lokasi.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">
                    Apakah cocok untuk rumah tinggal?
                </button>
                <div class="faq-answer">
                    Sangat cocok. Kami menyesuaikan kapasitas sesuai kebutuhan listrik harian dan pola penggunaan rumah Anda.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">
                    Apakah ada garansi setelah pemasangan?
                </button>
                <div class="faq-answer">
                    Ya, kami memberikan garansi komponen dan layanan pendukung untuk memastikan performa tetap optimal.
                </div>
            </div>
        </div>
    </section>

    <section class="cta-panel">
        <div>
            <div class="section-tag dark">Siap beralih?</div>
            <h2>Bangun sistem energi yang lebih hemat dan berkelanjutan.</h2>
        </div>
        <a href="{{ route('kontak') }}" class="btn btn-primary">Hubungi Tim Kami</a>
    </section>
@endsection