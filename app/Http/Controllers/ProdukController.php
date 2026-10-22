<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $query = Toy::query();

        if ($request->filled('q')) {
            $query->where('name', 'like', '%' . $request->q . '%');
        }
        if ($request->filled('kategori')) {
            $query->where('category', $request->kategori);
        }

        $produks = $query->latest()->paginate(6)->withQueryString();
        $kategoris = Toy::select('category')->distinct()->orderBy('category')->pluck('category');

        return view('page.produk', compact('produks', 'kategoris'));
    }

    public function show($id)
    {
        $produk = Toy::findOrFail($id);
        $terkait = Toy::where('category', $produk->category)
            ->where('id', '!=', $produk->id)
            ->take(3)
            ->get();

        return view('page.produk-detail', compact('produk', 'terkait'));
    }
}