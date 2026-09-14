@extends('layouts.app')

@section('title', 'Categories - Library System')

@section('content')
    <h2>Daftar Kategori</h2>

    @if(count($categories) > 0)
        <ul>
            @foreach($categories as $category)
                <li>{{ $category['nama'] }}</li>
            @endforeach
        </ul>
    @else
        <p>Belum ada data kategori.</p>
    @endif
@endsection