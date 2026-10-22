@extends('layouts.app')

@section('title', 'Produk')

@section('content')
<div class="container">
    <div class="mb-4 text-center">
        <h2 class="fw-bold">Katalog Produk</h2>
        <p class="text-muted">Pilih mainan favorit si kecil</p>
    </div>

    <form method="GET" action="{{ route('produk.index') }}" class="row g-2 mb-4">
        <div class="col-md-6">
            <input type="text" name="q" value="{{ request('q') }}" class="form-control" placeholder="Cari nama mainan...">
        </div>
        <div class="col-md-4">
            <select name="kategori" class="form-select">
                <option value="">Semua Kategori</option>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori }}" @selected(request('kategori') == $kategori)>{{ $kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2 d-grid">
            <button class="btn btn-warning">Cari</button>
        </div>
    </form>

    <div class="row g-4">
        @forelse ($produks as $produk)
            @include('partials.kartu-produk')
        @empty
            <div class="col-12">
                <div class="alert alert-secondary text-center">Produk tidak ditemukan.</div>
            </div>
        @endforelse
    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $produks->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
