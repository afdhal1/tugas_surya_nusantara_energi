@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <h1>Layanan Kami</h1>
    <p>Pilih solusi energi surya yang sesuai dengan kebutuhan Anda.</p>

    <div class="grid">
        @foreach ($layanan as $slug => $item)
            <article class="card">
                <h3>{{ $item['nama'] }}</h3>
                <p>{{ $item['ringkasan'] }}</p>
                <a href="{{ route('layanan.detail', $slug) }}" class="btn btn-small">Selengkapnya</a>
            </article>
        @endforeach
    </div>
@endsection
