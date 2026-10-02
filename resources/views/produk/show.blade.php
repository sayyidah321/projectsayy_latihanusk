@extends('layouts.app')

@section('content')
<div class="card shadow-sm col-md-8 mx-auto border-0 overflow-hidden">
    <div class="card-header bg-primary text-white fw-bold fs-5">
        Detail Informasi Produk
    </div>
    <div class="card-body p-4">
        <div class="row">
            <div class="col-md-5 mb-3 mb-md-0">
                <img src="{{ Str::startsWith($produk->gambar, 'http') ? $produk->gambar : asset('storage/' . $produk->gambar) }}"
                     class="img-fluid rounded shadow-sm w-100"
                     style="height: 250px; object-fit: cover;"
                     onerror="this.src='https://via.placeholder.com/300x250?text=Katalog+UMKM';">
            </div>
            <div class="col-md-7">
                <h3 class="fw-bold mb-3">{{ $produk->nama_produk }}</h3>
                <table class="table table-borderless">
                    <tr><th width="35%">Kode Produk</th><td>: {{ $produk->kode_produk }}</td></tr>
                    <tr><th>Kategori</th><td>: <span class="badge bg-info text-dark">{{ $produk->kategori }}</span></td></tr>
                    <tr><th>Harga</th><td>: <strong class="text-success fs-5">Rp {{ number_format($produk->harga, 0, ',', '.') }}</strong></td></tr>
                    <tr><th>Stok</th><td>: {{ $produk->stok }} unit</td></tr>
                    <tr><th>Deskripsi</th><td>: {{ $produk->deskripsi }}</td></tr>
                </table>
            </div>
        </div>
        <hr>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">&larr; Kembali ke Katalog</a>
    </div>
</div>
@endsection
