@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container">
    <h2>Tentang Toko Mainan Ceria</h2>
    <p class="text-muted">Aplikasi katalog toko mainan ini dibuat sebagai tugas UTS mata kuliah Rekayasa Web, Prodi Sistem Informasi UNPAM, menggunakan Laravel, SQLite, dan Bootstrap.</p>
    <ul>
        <li>Katalog produk dengan pencarian, filter kategori, dan pagination</li>
        <li>Halaman detail produk dan produk terkait</li>
    </ul>
</div>
@endsection
