@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <header class="page-intro">
        <span class="section-tag">Mari berbincang</span>
        <h1>Mulai dari percakapan.</h1>
        <p>Tim kami siap membantu Anda memahami kebutuhan energi surya. Hubungi kami melalui salah satu kanal berikut.</p>
    </header>

    <div class="grid">
        <article class="card contact-card">
            <h3>Alamat</h3>
            <p>Jl. Energi Bersih No. 1, Jakarta Selatan</p>
        </article>
        <article class="card contact-card">
            <h3>Telepon</h3>
            <p><a href="tel:+62215550123">(021) 555-0123</a></p>
        </article>
        <article class="card contact-card">
            <h3>Email</h3>
            <p><a href="mailto:halo@suryanusantara.example">halo@suryanusantara.example</a></p>
        </article>
    </div>
@endsection