@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="container">
    <h2 class="mb-3">Tambah Produk</h2>
    <div class="card shadow-sm border-0"><div class="card-body">
        <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
            @include('admin.produk._form')
        </form>
    </div></div>
</div>
@endsection
