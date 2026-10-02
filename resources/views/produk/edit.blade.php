@extends('layouts.app')

@section('content')
<div class="card shadow-sm col-md-8 mx-auto border-0">
    <div class="card-header bg-warning text-dark fw-bold">Edit Data Produk</div>
    <div class="card-body p-4">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Kode Produk</label>
                <input type="text" name="kode_produk" class="form-control" value="{{ $produk->kode_produk }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="{{ $produk->kategori }}" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Ubah Gambar (Opsional)</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi Produk</label>
                <textarea name="deskripsi" class="form-control" rows="3" required>{{ $produk->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Produk</button>
            <a href="{{ route('produk.admin') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
