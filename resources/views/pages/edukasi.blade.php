@extends('layouts.app')

@section('title', 'Panduan Energi Surya')

@section('content')
    <header class="education-intro">
        <span class="section-tag">Pusat edukasi</span>
        <h1>Pahami energi surya sebelum mulai.</h1>
        <p>Panduan ringkas tentang biaya, proses pemasangan, dan perawatan agar Anda bisa menyiapkan pertanyaan yang tepat sebelum berkonsultasi.</p>
        <a class="education-estimator-link" href="{{ route('layanan') }}#estimator-title">Coba kalkulator estimasi <span aria-hidden="true">↗</span></a>
    </header>

    <div class="education-grid">
        <article class="education-article" id="biaya">
            <span class="education-index">01 / PERENCANAAN</span>
            <h2>Memahami biaya pemasangan panel surya</h2>
            <p>Biaya sistem tidak ditentukan oleh jumlah panel saja. Kapasitas yang dibutuhkan, tipe inverter, struktur dan akses atap, panjang jalur kabel, serta kebutuhan pekerjaan elektrikal ikut memengaruhi ruang lingkup.</p>
            <h3>Yang sebaiknya dibandingkan</h3>
            <ul>
                <li>Rincian kapasitas dan komponen utama yang ditawarkan.</li>
                <li>Lingkup pekerjaan, termasuk proteksi listrik dan pemantauan.</li>
                <li>Cakupan garansi produk dan layanan, bukan hanya masa garansinya.</li>
                <li>Asumsi produksi energi serta biaya perawatan bila ada.</li>
            </ul>
            <p>Minta penawaran tertulis berdasarkan survei dan tagihan listrik aktual. Simulasi awal di halaman layanan hanya gambaran dan tidak menggantikan perhitungan teknis.</p>
        </article>

        <article class="education-article" id="proses">
            <span class="education-index">02 / PEMASANGAN</span>
            <h2>Langkah umum dari survei hingga sistem aktif</h2>
            <p>Proyek biasanya dimulai dengan diskusi kebutuhan, pemeriksaan tagihan dan kondisi lokasi. Tim kemudian menilai ruang atap, arah serta potensi bayangan, panel listrik, dan kebutuhan kapasitas sebelum menyusun desain.</p>
            <h3>Siapkan sebelum survei</h3>
            <ul>
                <li>Tagihan atau data pemakaian listrik beberapa bulan terakhir.</li>
                <li>Informasi perangkat berdaya besar dan rencana penambahan beban.</li>
                <li>Akses ke atap dan panel listrik utama untuk pemeriksaan.</li>
                <li>Preferensi penggunaan siang hari atau kebutuhan cadangan daya.</li>
            </ul>
            <p>Setelah desain dan ruang lingkup disetujui, pemasangan, pemeriksaan keselamatan, serta proses aktivasi mengikuti kondisi proyek dan persyaratan yang berlaku di wilayah Anda.</p>
        </article>

        <article class="education-article" id="perawatan">
            <span class="education-index">03 / PENGGUNAAN</span>
            <h2>Perawatan dan hal yang perlu diketahui</h2>
            <p>Sistem surya umumnya membutuhkan pemantauan berkala agar gangguan atau penurunan produksi dapat diketahui. Jadwal pembersihan dan pemeriksaan mengikuti petunjuk produsen, kondisi lingkungan, serta rekomendasi pemasang.</p>
            <h3>Kebiasaan yang membantu</h3>
            <ul>
                <li>Periksa data produksi dan notifikasi pada aplikasi pemantauan.</li>
                <li>Jaga panel bebas dari bayangan baru, misalnya dari dahan yang tumbuh.</li>
                <li>Jangan mengakses atau membersihkan atap tanpa prosedur keselamatan.</li>
                <li>Simpan dokumen desain, garansi, dan kontak layanan purna jual.</li>
            </ul>
            <p>Produksi aktual dapat berubah karena cuaca, bayangan, suhu, kondisi peralatan, dan pola konsumsi. Pastikan penjelasan tentang batas garansi, perawatan, dan dukungan tertulis dalam dokumen proyek.</p>
        </article>
    </div>

    <section class="education-cta">
        <div>
            <span class="section-tag">Langkah berikutnya</span>
            <h2>Perlu panduan sesuai kondisi properti Anda?</h2>
            <p>Kirimkan gambaran kebutuhan dan tagihan listrik Anda untuk memulai diskusi.</p>
        </div>
        <a href="{{ route('kontak') }}" class="btn btn-primary">Konsultasi dengan tim <span aria-hidden="true">↗</span></a>
    </section>
@endsection
