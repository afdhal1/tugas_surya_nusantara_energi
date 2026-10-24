@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <div>
                <div class="eyebrow">Solusi energi masa depan</div>
                <h1>Hidupkan masa depan dengan energi surya yang cerdas.</h1>
                <p>Surya Nusantara Energi membantu rumah, bisnis, dan industri beralih ke energi bersih yang hemat, andal, dan siap menghadapi kebutuhan hari ini dan esok.</p>

                <div class="hero-actions">
                    <a href="{{ route('kontak') }}" class="btn btn-primary">Konsultasi Gratis</a>
                    <a href="{{ route('layanan') }}" class="btn btn-secondary">Lihat Layanan</a>
                </div>

                <div class="hero-metrics">
                    <div class="metric">
                        <strong>1.5k+</strong>
                        <span>Instalasi</span>
                    </div>
                    <div class="metric">
                        <strong>28%</strong>
                        <span>Hemat biaya</span>
                    </div>
                    <div class="metric">
                        <strong>24/7</strong>
                        <span>Dukungan</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-card">
                    <div class="hero-card-header">
                        <h3>Produksi harian</h3>
                        <span class="status-pill">Aktif</span>
                    </div>

                    <div class="energy-panel">
                        <div class="energy-row">
                            <strong>72%</strong>
                            <span>Capacitas</span>
                        </div>
                        <div class="energy-bar"><span></span></div>
                    </div>

                    <div class="hero-mini-grid">
                        <div class="mini-stat">
                            <strong>8.4 MWh</strong>
                            <span>Output bulan ini</span>
                        </div>
                        <div class="mini-stat">
                            <strong>4.8k</strong>
                            <span>Kg CO₂ terhemat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="info-grid">
        <div class="info-card accent">
            <div class="info-icon">⚡</div>
            <h3>Efisiensi tertinggi</h3>
            <p>Sistem dirancang agar menghasilkan energi maksimal sepanjang hari dengan pemantauan real time.</p>
        </div>
        <div class="info-card">
            <div class="info-icon">🛡️</div>
            <h3>Garansi terjamin</h3>
            <p>Panel, inverter, dan instalasi didukung garansi panjang agar investasi Anda aman dan tenang.</p>
        </div>
        <div class="info-card">
            <div class="info-icon">📈</div>
            <h3>ROI jelas</h3>
            <p>Analisis kebutuhan dan estimasi pengembalian modal dibuat transparan sejak awal proyek.</p>
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
                <div class="card-icon">☀️</div>
                <h3>{{ $item['nama'] }}</h3>
                <p>{{ $item['ringkasan'] }}</p>
                <a href="{{ route('layanan.detail', $slug) }}" class="card-link">Lihat detail <span>→</span></a>
            </article>
        @endforeach
    </div>

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

    <section class="testimonial-section">
        <div class="section-head">
            <div>
                <div class="section-tag">Testimoni</div>
                <h2>Yang pelanggan bilang</h2>
            </div>
        </div>

        <div class="testimonial-grid">
            <article class="testimonial-card">
                <p>"Prosesnya cepat, hasilnya sesuai target. Tagihan listrik kami turun signifikan hanya dalam beberapa bulan."</p>
                <div class="person">
                    <strong>Rina W.</strong>
                    <span>Rumah Tangga</span>
                </div>
            </article>
            <article class="testimonial-card">
                <p>"Timnya sangat profesional. Sistem PLTS kami berjalan stabil dan dukungan purna jual juga responsif."</p>
                <div class="person">
                    <strong>Andi S.</strong>
                    <span>UMKM</span>
                </div>
            </article>
            <article class="testimonial-card">
                <p>"Kami memilih solusi industri karena analisis ROI-nya detail dan realisasi proyek sesuai jadwal."</p>
                <div class="person">
                    <strong>PT. Nusantara Maju</strong>
                    <span>Industri</span>
                </div>
            </article>
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