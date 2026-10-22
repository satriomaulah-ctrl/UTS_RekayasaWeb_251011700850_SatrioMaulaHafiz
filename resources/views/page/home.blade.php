@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="p-5 mb-5 bg-white rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold">Selamat Datang di Toko Mainan Ceria 🎉</h1>
        <p class="lead text-muted">Mainan berkualitas, aman, dan seru untuk si kecil. Dari boneka, kendaraan, sampai mainan edukasi.</p>
        <a href="{{ route('produk.index') }}" class="btn btn-warning btn-lg">Lihat Semua Produk</a>
    </div>

    <h3 class="mb-3">Produk Terbaru</h3>
    <div class="row g-4">
        @foreach ($unggulan as $produk)
            @include('partials.kartu-produk')
        @endforeach
    </div>
</div>
@endsection
