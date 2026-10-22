@extends('layouts.app')

@section('title', $produk->name)

@section('content')
<div class="container">
    <div class="mb-4">
        <a href="{{ route('produk.index') }}" class="btn btn-danger">Kembali</a>
    </div>

    <div class="row g-4">
        <div class="col-md-7">
            <img src="{{ asset('assets/images/' . ($produk->image ?? 'produk1.svg')) }}" alt="{{ $produk->name }}"
                class="img-fluid w-100 rounded shadow-sm" style="min-height: 300px; object-fit: cover;">
        </div>
        <div class="col-md-5">
            <span class="badge bg-info text-dark mb-2">{{ $produk->category }}</span>
            <h3 class="fw-bold">{{ $produk->name }}</h3>
            <h4 class="text-success mb-3">{{ $produk->harga_rupiah }}</h4>
            <p>{{ $produk->description }}</p>
            <p class="mb-1">
                Usia:
                <span class="badge bg-success">{{ $produk->age_group }}</span>
            </p>
            <small class="text-muted">Ditambahkan: {{ $produk->created_at->format('d M Y') }}</small>
        </div>
    </div>

    @if ($terkait->count())
        <h4 class="mt-5 mb-3">Produk Terkait</h4>
        <div class="row g-4">
            @foreach ($terkait as $produk)
                @include('partials.kartu-produk')
            @endforeach
        </div>
    @endif
</div>
@endsection