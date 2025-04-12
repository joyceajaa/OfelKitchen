<?php

namespace App\Http\Controllers\Admin; // Pastikan namespace benar

use App\Http\Controllers\Controller; // Jangan lupa use Controller dasar
use App\Models\Product;
use Illuminate\Http\Request; // Gunakan Request untuk validasi dan data form

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua produk, urutkan berdasarkan yang terbaru, paginasi 10 per halaman
        $products = Product::latest()->paginate(10);
        // Kirim data produk ke view 'admin.products.index'
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan view 'admin.products.create'
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi data input
        $validatedData = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        // 2. Buat produk baru menggunakan data yang sudah divalidasi
        Product::create($validatedData);

        // 3. Redirect ke halaman index produk dengan pesan sukses
        return redirect()->route('layouts.admin.index')
                         ->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     * Route Model Binding: Laravel otomatis mencari Product berdasarkan ID dari URL
     */
    public function show(Product $product)
    {
        // Tampilkan view 'admin.products.show' dengan data produk spesifik
        // (Opsional, seringkali di admin langsung ke edit atau index)
         return view('admin.layouts.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // Tampilkan view 'admin.products.edit' dengan data produk yang akan diedit
        return view('admin.layouts.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
         // 1. Validasi data input
         $validatedData = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        // 2. Update data produk yang ada
        $product->update($validatedData);

        // 3. Redirect ke halaman index produk dengan pesan sukses
        return redirect()->route('admin.layouts.index')
                         ->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Hapus produk
        $product->delete();

        // Redirect ke halaman index produk dengan pesan sukses
        return redirect()->route('admin.layouts.index')
                         ->with('success', 'Produk berhasil dihapus!');
    }
}
