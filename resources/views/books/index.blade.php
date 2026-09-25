@extends('layouts.app')

@section('title', 'Books - Library System')

@section('content')
    <h2>Daftar Buku</h2>

    @if(count($books) > 0)
        <ul>
            @foreach($books as $book)
                <li>
                    <strong>ID: {{ $book->id }}</strong> — <strong>{{ $book->judul }}</strong> — {{ $book->penulis }} ({{ $book->tahun_terbit }}) — Stok: {{ $book->stok }}
                    <br>
                    <a href="/books/{{ $book->id }}">Lihat Detail</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Belum ada data buku.</p>
    @endif
@endsection