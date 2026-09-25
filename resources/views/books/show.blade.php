@extends('layouts.app')

@section('title', 'Detail Buku - Library System')

@section('content')
    <h2>Detail Buku</h2>

    @if($book)
        <p><strong>ID:</strong> {{ $book->id }}</p>
        <p><strong>Judul:</strong> {{ $book->judul }}</p>
        <p><strong>Penulis:</strong> {{ $book->penulis }}</p>
        <p><strong>Tahun Terbit:</strong> {{ $book->tahun_terbit }}</p>
        <p><strong>Stok:</strong> {{ $book->stok }}</p>
    @else
        <p>Buku tidak ditemukan.</p>
    @endif

    <a href="/books">Kembali ke Daftar Buku</a>
@endsection