@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-5">
    <h3 class="text-center mb-4" style="color:#d63384;">Form Login UTS</h3>

    <form action="{{ route('login.proses') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label class="form-label">Nama Pengguna</label>
        <input type="text" name="username" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Kata Sandi</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <button type="submit" class="btn w-100 mt-2" style="background-color:#d63384; color:white;">
        Masuk
      </button>
    </form>
  </div>
</div>
@endsection
