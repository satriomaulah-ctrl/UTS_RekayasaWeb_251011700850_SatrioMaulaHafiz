<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::latest()->paginate(10);
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['gambar'] = $this->simpanGambar($request);
        Produk::create($data);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Produk $produk)
    {
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        $data = $this->validated($request);
        if ($gambar = $this->simpanGambar($request)) {
            $data['gambar'] = $gambar;
        }
        $produk->update($data);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);
    }

    private function simpanGambar(Request $request): ?string
    {
        if (! $request->hasFile('gambar')) {
            return null;
        }
        $file = $request->file('gambar');
        $nama = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $nama);

        return $nama;
    }
}
