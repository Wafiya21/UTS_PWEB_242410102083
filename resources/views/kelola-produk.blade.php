@extends('layouts.app')

@section('title', 'Kelola Produk')

@section('content')
<h3 class="mb-3">Daftar Produk</h3>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataBarang as $barang)
            <tr>
                <td>{{ $barang['nama_produk'] }}</td>
                <td>{{ $barang['jenis'] }}</td>
                <td>{{ $barang['stok'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
