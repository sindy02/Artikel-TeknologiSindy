@extends('layouts.app')

@section('title', $artikel['judul'] . ' - TeknoSindy')

@section('content')

<div class="card">

    <span class="category">
        {{ $artikel['kategori'] }}
    </span>

    <h1>{{ $artikel['judul'] }}</h1>

    <p>
        Penulis: {{ $artikel['penulis'] }} |
        {{ $artikel['tanggal'] }}
    </p>

    <hr>

    <p>{{ $artikel['ringkasan'] }}</p>

    <p>{{ $artikel['isi'] }}</p>

    <br>

    <a href="{{ route('artikel.index') }}">
        ← Kembali ke Daftar Artikel
    </a>

</div>

@endsection