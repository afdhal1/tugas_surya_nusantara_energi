@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
    <section class="hero error-page">
        <h1>404</h1>
        <h2>Halaman tidak ditemukan</h2>
        <p>Maaf, halaman yang Anda cari tidak ada atau sudah dipindahkan.</p>
        <a href="{{ route('beranda') }}" class="btn">Kembali ke Beranda</a>
    </section>
@endsection