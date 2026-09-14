@extends('layouts.app')

@section('title', 'Members - Library System')

@section('content')
    <h2>Daftar Member</h2>

    @if(count($members) > 0)
        <ul>
            @foreach($members as $member)
                <li>{{ $member['nama'] }} — {{ $member['email'] }}</li>
            @endforeach
        </ul>
    @else
        <p>Belum ada data member.</p>
    @endif
@endsection