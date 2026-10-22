@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@csrf

<div class="mb-3">
    <label class="form-label">Nama Produk</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $produk->name ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Kategori</label>
    <input type="text" name="kategori" class="form-control" list="daftar-kategori"
        value="{{ old('kategori', $produk->category ?? '') }}" required>
    <datalist id="daftar-kategori">
        @foreach (['Action Figure', 'Boneka', 'Edukasi', 'Kendaraan', 'Outdoor'] as $k)
            <option value="{{ $k }}">
        @endforeach
    </datalist>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Harga (Rp)</label>
        <input type="number" name="harga" min="0" class="form-control" value="{{ old('harga', $produk->harga ?? '') }}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Stok</label>
        <input type="number" name="stok" min="0" class="form-control" value="{{ old('stok', $produk->stok ?? 0) }}" required>
    </div>
</div>
<div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <textarea name="deskripsi" rows="4" class="form-control">{{ old('deskripsi', $produk->description ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label class="form-label">Gambar (opsional, maks 2MB)</label>
    <input type="file" name="gambar" accept="image/*" class="form-control">
</div>
<a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Batal</a>
<button class="btn btn-success">Simpan</button>
