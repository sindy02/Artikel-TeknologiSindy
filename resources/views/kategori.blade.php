@extends('layouts.app')

@section('title', 'Kategori - TeknoSindy')

@section('content')

<h1>Kategori Artikel</h1>

<p>Pilih kategori untuk menemukan artikel sesuai minatmu.</p>

<div class="grid">

    @foreach ($kategoris as $kategori)
        <div class="card">

            <h3>{{ $kategori }}</h3>

            <p>Artikel mengenai {{ $kategori }}.</p>

            @foreach ($artikels as $artikel)
                @if ($artikel['kategori'] === $kategori)

                    <p>
                        <a href="{{ route('artikel.detail', $artikel['id']) }}">
                            {{ $artikel['judul'] }}
                        </a>
                    </p>

                @endif
            @endforeach

        </div>
    @endforeach

</div>

@endsection