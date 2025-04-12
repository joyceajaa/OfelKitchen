@extends('layouts.admin') {{-- Menggunakan layout admin --}}

@section('title', 'Daftar Produk') {{-- Mengatur judul halaman --}}

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Tambah Produk Baru</a>

    {{-- Tampilkan pesan sukses jika ada --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product) {{-- Loop data produk --}}
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nama_produk }}</td>
                    <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td> {{-- Format harga --}}
                    <td>{{ $product->stok }}</td>
                    <td>
                        {{-- Tombol Show (Opsional) --}}
                        {{-- <a href="{{ route('admin.products.show', $product) }}" class="btn btn-sm btn-info">Lihat</a> --}}

                        {{-- Tombol Edit --}}
                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>

                        {{-- Tombol Hapus (dalam form) --}}
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display: inline-block;">
                            @csrf {{-- Token CSRF Laravel --}}
                            @method('DELETE') {{-- Method spoofing untuk DELETE --}}
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty {{-- Jika tidak ada produk --}}
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Tampilkan link pagination --}}
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>
@endsection
