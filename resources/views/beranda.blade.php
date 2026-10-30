@extends('layouts.app')

@section('title', 'Beranda - TeknoSindy')

@section('content')

<section class="hero">
    <h1>Jelajahi Dunia Teknologi Bersama TeknoSindy</h1>

    <p>
        Temukan informasi, wawasan, dan artikel terbaru
        seputar teknologi, komputer, pemrograman, dan kecerdasan buatan.
    </p>

    <a href="{{ route('artikel.index') }}" class="button">
        Baca Artikel
    </a>
</section>

<h2>Selamat Datang di TeknoSindy</h2>

<p>
    TeknoSindy merupakan website informasi teknologi yang
    menyajikan artikel edukatif untuk membantu pembaca
    memahami perkembangan teknologi digital.
</p>

<h2>Topik yang Bisa Kamu Pelajari</h2>

<div class="grid">
    <div class="card">
        <h3>🤖 Kecerdasan Buatan</h3>
        <p>Pelajari AI dan penerapannya dalam kehidupan sehari-hari.</p>
    </div>

    <div class="card">
        <h3>💻 Komputer</h3>
        <p>Kenali perangkat komputer dan teknologi pendukungnya.</p>
    </div>

    <div class="card">
        <h3>⌨️ Pemrograman</h3>
        <p>Pelajari dasar pemrograman dan pengembangan aplikasi.</p>
    </div>
</div>

<div style="margin-top: 30px;">
    <a href="{{ route('artikel.index') }}" class="button">
        Lihat Semua Artikel
    </a>
</div>

@endsection