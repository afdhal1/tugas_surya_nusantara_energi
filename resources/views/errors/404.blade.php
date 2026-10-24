@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
    <section class="hero error-page" aria-labelledby="error-title">
        <div class="error-page-content">
            <div class="error-copy">
                <p class="error-eyebrow"><span aria-hidden="true"></span> Terjadi kesalahan 404</p>
                <p class="error-code" aria-hidden="true">404</p>
                <h1 id="error-title">Halaman ini tidak ditemukan</h1>
                <p class="error-description">Maaf, halaman yang Anda cari mungkin sudah dipindahkan atau alamatnya tidak tepat.</p>

                <div class="error-actions">
                    <a href="{{ route('beranda') }}" class="btn btn-primary">Kembali ke Beranda <span aria-hidden="true">↗</span></a>
                    <a href="{{ route('layanan') }}" class="btn btn-secondary">Jelajahi Layanan</a>
                </div>

                <p class="error-help">Masih membutuhkan bantuan? <a href="{{ route('kontak') }}">Hubungi tim kami</a></p>
            </div>

            <div class="error-illustration" aria-hidden="true">
                <svg viewBox="0 0 440 360" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="317" cy="96" r="47" fill="#F3D8A8"/>
                    <path d="M317 25V9M317 183v-16M388 96h16M230 96h16M367 46l12-12M255 158l12-12m100 0 12 12M255 34l12 12" stroke="#D87845" stroke-width="5" stroke-linecap="round"/>
                    <path d="M38 286c34-43 75-64 123-64 59 0 80 37 135 37 38 0 69-18 106-55v156H38v-74Z" fill="#DCE8DC"/>
                    <path d="M64 283h190l-20 69H84l-20-69Z" fill="#194D3D"/>
                    <path d="m89 283 11 69m43-69v69m43-69-11 69M70 306h177m-170 23h164" stroke="#D6E3D7" stroke-width="3"/>
                    <path d="M45 352h350" stroke="#194D3D" stroke-width="6" stroke-linecap="round"/>
                    <path d="M302 270v-56m0 22c-20 0-30-13-30-29 17 0 30 11 30 29Zm0-8c20 0 30-13 30-29-17 0-30 11-30 29Z" stroke="#194D3D" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="100" cy="105" r="35" fill="#E8EEE8"/>
                    <path d="M100 84v42m-21-21h42m-36-15 30 30m0-30-30 30" stroke="#194D3D" stroke-width="4" stroke-linecap="round"/>
                </svg>
                <span class="error-illustration-note">Sepertinya kita tersesat sebentar.</span>
            </div>
        </div>
    </section>
@endsection
