<div class="col-md-4">
    <div class="card h-100 shadow-sm border-0">
        <img src="{{ asset('assets/images/' . ($produk->image ?? 'produk1.svg')) }}" alt="{{ $produk->name }}"
            class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
            <span class="badge bg-info text-dark mb-2">{{ $produk->category }}</span>
            <h5 class="card-title">{{ $produk->name }}</h5>
            <p class="card-text text-muted">{{ Str::limit($produk->description, 60) }}</p>
        </div>
        <div class="card-footer bg-white border-0 pb-3">
            <div class="d-flex justify-content-between mb-2">
                <strong class="text-success">{{ $produk->harga_rupiah }}</strong>
                <small class="text-muted">{{ $produk->age_group }}</small>
            </div>
            <a href="{{ route('produk.show', $produk->id) }}" class="btn btn-primary w-100">Detail Produk</a>
        </div>
    </div>
</div>