@extends('layouts.app')

@section('title', 'Dashboard - Library System')

@section('content')
    <h2>{{ $appTitle }}</h2>
    <p>{{ $appDescription }}</p>

    <ul>
        <li>Jumlah Buku: {{ $totalBooks }}</li>
        <li>Jumlah Member: {{ $totalMembers }}</li>
        <li>Jumlah Kategori: {{ $totalCategories }}</li>
    </ul>
@endsection