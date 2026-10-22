@extends('layouts.app')

@section('title', 'Admin Produk')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Kelola Produk</h2>
        <a href="{{ route('admin.produk.create') }}" class="btn btn-success">+ Tambah Produk</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive bg-white shadow-sm rounded">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produks as $produk)
                    <tr>
                        <td>{{ $produks->firstItem() + $loop->index }}</td>
                        <td><img src="{{ asset('images/' . ($produk->image ?? 'produk1.svg')) }}" width="60" height="40" style="object-fit: cover;" class="rounded" alt=""></td>
                        <td>{{ $produk->name }}</td>
                        <td>{{ $produk->category }}</td>
                        <td>{{ $produk->harga_rupiah }}</td>
                        <td>{{ $produk->stok }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.produk.edit', $produk) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.produk.destroy', $produk) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Hapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="text-center text-muted py-4">Belum ada produk.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3 d-flex justify-content-center">
        {{ $produks->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
