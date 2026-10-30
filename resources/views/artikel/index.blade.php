@extends('layouts.app')

@section('title', 'Daftar Artikel - TeknoSindy')

@section('content')

<h1>Artikel Teknologi</h1>

<p>
    Temukan berbagai artikel menarik seputar perkembangan teknologi.
</p>

<div class="grid">
    @foreach ($artikels as $artikel)
        <div class="card">

            <span class="category">
                {{ $artikel['kategori'] }}
            </span>

            <h3>{{ $artikel['judul'] }}</h3>

            <p>{{ $artikel['ringkasan'] }}</p>

            <p>
                <small>
                    Penulis: {{ $artikel['penulis'] }}
                </small>
            </p>

            <a href="{{ route('artikel.detail', $artikel['id']) }}">
                Baca Selengkapnya →
            </a>

        </div>
    @endforeach
</div>

@endsection