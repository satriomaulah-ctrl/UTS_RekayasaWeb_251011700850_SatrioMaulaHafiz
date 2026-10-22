@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="container">
    <h2 class="mb-3">Edit Produk</h2>
    <div class="card shadow-sm border-0"><div class="card-body">
        <form action="{{ route('admin.produk.update', $produk) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('admin.produk._form')
        </form>
    </div></div>
</div>
@endsection
