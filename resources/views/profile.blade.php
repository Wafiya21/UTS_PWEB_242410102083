@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
<div class="card mx-auto p-4" style="max-width: 600px;">
    <h3 class="text-pink mb-4">Profile Pengguna</h3>
    <p><strong>Nama Pengguna:</strong> {{ $username }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Status:</strong> {{ $status }}</p>
</div>
@endsection
