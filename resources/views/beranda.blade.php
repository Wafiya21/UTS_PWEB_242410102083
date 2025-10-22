@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="text-center">
    <h2>Selamat Datang, {{ $username ?? 'kamu' }}!</h2>
    <p>Ini adalah halaman beranda aku.</p>
    <a href="{{ route('profile', ['username' => $username]) }}" class="btn btn-success mt-3">Lihat Profil</a>
</div>
@endsection
