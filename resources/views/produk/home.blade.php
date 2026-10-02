@extends('layouts.app')

@section('content')
<div class="p-5 mb-5 bg-primary text-white rounded-3 shadow text-center">
    <h1 class="display-4 fw-bold">Selamat Datang di Katalog UMKM Siswa SMK</h1>
    <p class="fs-5 mt-3">Mendukung karya kreatif dan produk inovatif buatan generasi muda Indonesia.</p>
    <a href="{{ route('produk.index') }}" class="btn btn-warning btn-lg fw-bold text-dark mt-3 px-4 shadow-sm">Lihat Semua Katalog Produk &rarr;</a>
</div>

<div class="mb-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold m-0">Produk Unggulan</h3>
        <a href="{{ route('produk.index') }}" class="btn btn-outline-primary btn-sm">Lihat Selengkapnya</a>
    </div>

    <div class="row">
        @foreach($produks as $item)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ Str::startsWith($item->gambar, 'http') ? $item->gambar : asset('storage/' . $item->gambar) }}"
                         class="card-img-top"
                         alt="{{ $item->nama_produk }}"
                         style="height: 180px; object-fit: cover;"
                         onerror="this.src='https://via.placeholder.com/300x180?text=Katalog+UMKM';">

                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-info text-dark mb-2 align-self-start">{{ $item->kategori }}</span>
                        <h5 class="card-title fw-bold text-truncate">{{ $item->nama_produk }}</h5>
                        <p class="text-primary fw-bold fs-5 mb-1">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                        <p class="text-secondary small mb-3">Stok: {{ $item->stok }} unit</p>
                        <a href="{{ route('produk.show', $item->id) }}" class="btn btn-outline-primary mt-auto w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
