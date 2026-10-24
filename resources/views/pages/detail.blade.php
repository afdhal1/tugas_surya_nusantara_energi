@extends('layouts.app')

@section('title', $item['nama'])

@section('content')
    <div class="page-header">
        <div class="crumb"><a href="{{ route('layanan') }}">← Kembali ke Layanan</a></div>
        <span class="detail-label">Solusi energi surya</span>
        <h1>{{ $item['nama'] }}</h1>
        <p>{{ $item['deskripsi'] }}</p>
    </div>

    <div class="page-shell">
        <div class="section-head">
            <div>
                <div class="section-tag">Keunggulan</div>
                <h2>Kenapa memilih layanan ini?</h2>
            </div>
        </div>

        <ul class="feature-list">
            @foreach ($item['fitur'] as $fitur)
                <li>{{ $fitur }}</li>
            @endforeach
        </ul>

        <div class="detail-action">
            <a href="{{ route('kontak') }}" class="btn btn-primary">Minta Penawaran</a>
        </div>
    </div>
@endsection
