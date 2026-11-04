@extends('layouts.app')

@section('title', 'Kelola Pengguna - Library System')

@section('content')
    <h2>Kelola Pengguna</h2>

    @if(count($users) > 0)
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }} — {{ $user->email }} — Role: {{ $user->role }}</li>
            @endforeach
        </ul>
    @else
        <p>Belum ada data pengguna.</p>
    @endif
@endsection