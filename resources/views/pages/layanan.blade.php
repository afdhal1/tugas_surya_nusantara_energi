@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <section class="catalog-intro">
        <span class="catalog-kicker"><span aria-hidden="true">✳</span> Katalog solusi</span>
        <h1>Layanan energi surya, <span>sesuai kebutuhan.</span></h1>
        <p>Dari panel surya di rumah hingga solusi untuk fasilitas usaha, temukan layanan yang tepat untuk langkah energi Anda berikutnya.</p>

        <div class="catalog-filters" role="group" aria-label="Filter kategori layanan">
            <button class="catalog-filter is-active" type="button" data-filter="all" aria-pressed="true">Semua solusi</button>
            <button class="catalog-filter" type="button" data-filter="residensial" aria-pressed="false">Residensial</button>
            <button class="catalog-filter" type="button" data-filter="komersial" aria-pressed="false">Komersial &amp; industri</button>
            <button class="catalog-filter" type="button" data-filter="baterai" aria-pressed="false">Penyimpanan energi</button>
        </div>
    </section>

    <section class="catalog-services" aria-label="Daftar layanan">
        @foreach ($layanan as $slug => $item)
            @php
                $category = match ($slug) {
                    'panel-surya-rumah' => 'residensial',
                    'plts-komersial' => 'komersial',
                    'penyimpanan-baterai' => 'baterai',
                    default => 'residensial',
                };
                $categoryLabel = match ($category) {
                    'residensial' => 'Solusi residensial',
                    'komersial' => 'Komersial & industri',
                    'baterai' => 'Penyimpanan energi',
                };
                $icon = match ($category) {
                    'residensial' => 'sun',
                    'komersial' => 'building',
                    'baterai' => 'battery',
                };
            @endphp
            <article class="service-card" data-category="{{ $category }}">
                <div class="service-card-top">
                    <span class="service-badge badge-{{ $category }}">{{ $categoryLabel }}</span>
                    <span class="service-icon" aria-hidden="true">
                        @if ($icon === 'sun')
                            <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                        @elseif ($icon === 'building')
                            <svg viewBox="0 0 24 24" fill="none"><path d="M4 21V5.8c0-.5.3-.9.8-1.1l6.4-2.4c.8-.3 1.8.3 1.8 1.2V21m0-11h6.2c.5 0 .8.4.8.9V21M2 21h20M7.5 7.5h2m-2 4h2m-2 4h2m7-1h2m-2 4h2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        @else
                            <svg viewBox="0 0 24 24" fill="none"><rect x="3" y="7" width="17" height="10" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M22 10v4M7 10v4m4-4v4m4-4v4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                        @endif
                    </span>
                </div>
                <h2>{{ $item['nama'] }}</h2>
                <p class="service-summary">{{ $item['ringkasan'] }}</p>
                <ul class="service-features">
                    @foreach ($item['fitur'] as $fitur)
                        <li><span aria-hidden="true">✓</span>{{ $fitur }}</li>
                    @endforeach
                </ul>
                <div class="service-card-actions">
                    <a class="service-detail-link" href="{{ route('layanan.detail', $slug) }}">Pelajari layanan <span aria-hidden="true">↗</span></a>
                    <a class="service-cta" href="{{ route('kontak') }}">Konsultasi</a>
                </div>
            </article>
        @endforeach
    </section>

    <section class="estimator" aria-labelledby="estimator-title">
        <div class="estimator-copy">
            <span class="estimator-label"><span aria-hidden="true">⌁</span> Estimasi awal</span>
            <h2 id="estimator-title">Seberapa besar potensi energi surya Anda?</h2>
            <p>Geser estimasi tagihan listrik bulanan untuk melihat gambaran awal kapasitas sistem dan potensi penghematan.</p>
            <div class="estimator-control">
                <label for="bill-slider">Tagihan listrik bulanan</label>
                <output class="bill-output" id="bill-display" for="bill-slider">Rp 3.500.000</output>
                <input id="bill-slider" type="range" min="1000000" max="30000000" step="500000" value="3500000">
                <div class="slider-range"><span>Rp 1 juta</span><span>Rp 30 juta</span></div>
            </div>
            <p class="estimator-disclaimer" id="estimator-disclaimer">Angka ini simulasi indikatif, bukan penawaran teknis atau jaminan penghematan. Hasil sebenarnya bergantung pada lokasi, profil pemakaian, dan desain sistem.</p>
            <details class="estimator-assumptions">
                <summary>Bagaimana estimasi ini dihitung?</summary>
                <ul>
                    <li>Kapasitas: tagihan bulanan dibagi Rp 1.250.000 per kWp, dengan batas minimum simulasi 1,2 kWp.</li>
                    <li>Potensi hemat: diasumsikan sebesar 45% dari tagihan bulanan.</li>
                    <li>Reduksi CO₂: diasumsikan sebesar 1,35 ton per kWp per tahun.</li>
                </ul>
                <p>Ini asumsi ilustratif untuk perbandingan awal, bukan jaminan performa. Hasil riil perlu dihitung dari data pemakaian, lokasi, kondisi atap, konfigurasi sistem, dan faktor emisi yang relevan.</p>
            </details>
        </div>
        <div class="estimator-results" aria-live="polite">
            <div class="results-heading"><span>Gambaran simulasi</span><span class="estimate-status"><i></i> Diperbarui otomatis</span></div>
            <div class="estimate-metric">
                <span class="metric-icon metric-solar" aria-hidden="true">☼</span>
                <div><small>Rekomendasi kapasitas</small><strong id="calc-capacity">2,8 kWp</strong></div>
            </div>
            <div class="estimate-metric savings-metric">
                <span class="metric-icon metric-saving" aria-hidden="true">↘</span>
                <div><small>Potensi hemat per bulan*</small><strong id="calc-savings">Rp 1.575.000</strong></div>
            </div>
            <div class="estimate-metric">
                <span class="metric-icon metric-carbon" aria-hidden="true">♧</span>
                <div><small>Perkiraan reduksi CO₂*</small><strong id="calc-co2">3,8 ton / tahun</strong></div>
            </div>
            <a href="{{ route('kontak') }}" class="estimator-cta">Minta perhitungan lebih lanjut <span aria-hidden="true">→</span></a>
            <small class="metric-footnote">*Angka mengikuti asumsi simulasi di samping; bukan hasil survei teknis.</small>
        </div>
    </section>

    <section class="catalog-proof">
        <div class="proof-copy">
            <span class="proof-label"><span aria-hidden="true">✳</span> Dirancang dengan cermat</span>
            <h2>Setiap atap punya cerita energi yang berbeda.</h2>
            <p>Kondisi bangunan, pola penggunaan listrik, dan tujuan Anda menjadi bagian dari perencanaan sistem. Kami mulai dengan mendengarkan, lalu menyusun solusi bersama.</p>
            <a href="{{ route('tentang') }}" class="proof-link">Kenali pendekatan kami <span aria-hidden="true">↗</span></a>
        </div>
        <div class="proof-images">
            <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&amp;fit=crop&amp;w=900&amp;q=80" alt="Panel surya di atap bangunan" loading="lazy">
            <img src="https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?auto=format&amp;fit=crop&amp;w=900&amp;q=80" alt="Panel surya menangkap cahaya matahari" loading="lazy">
        </div>
    </section>

    <section class="catalog-faq">
        <div class="catalog-faq-heading">
            <span class="section-tag">Sebelum memulai</span>
            <h2>Pertanyaan yang sering muncul</h2>
            <p>Jawaban singkat untuk membantu Anda mengambil langkah pertama.</p>
        </div>
        <div class="faq-list">
            <div class="faq-item open">
                <button class="faq-question" type="button" aria-expanded="true">Berapa lama proses instalasi panel surya?<span></span></button>
                <div class="faq-answer">Umumnya proses survei hingga instalasi membutuhkan waktu 2–6 minggu, tergantung skala proyek dan persetujuan lokasi.</div>
            </div>
            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">Apakah sistem panel surya cocok untuk rumah tinggal?<span></span></button>
                <div class="faq-answer">Bisa. Kapasitas sistem dirancang berdasarkan kebutuhan listrik harian, kondisi atap, dan pola penggunaan rumah Anda.</div>
            </div>
            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">Apakah ada garansi setelah pemasangan?<span></span></button>
                <div class="faq-answer">Garansi komponen dan layanan pendukung tersedia sesuai jenis produk serta cakupan proyek. Rincian garansi akan dijelaskan dalam penawaran.</div>
            </div>
        </div>
    </section>

    <section class="catalog-cta">
        <div>
            <span class="catalog-cta-label">Konsultasi tanpa biaya</span>
            <h2>Punya rencana untuk beralih ke energi surya?</h2>
            <p>Ceritakan kebutuhan Anda. Kami bantu menentukan langkah yang masuk akal untuk properti Anda.</p>
        </div>
        <a href="{{ route('kontak') }}" class="btn catalog-cta-button">Bicarakan kebutuhan Anda <span aria-hidden="true">↗</span></a>
    </section>
@endsection
