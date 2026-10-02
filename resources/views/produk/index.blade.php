@extends('layouts.app')

@section('content')
<h3 class="fw-bold mb-4">Katalog Produk UMKM</h3>

<div class="row mb-4">
    <div class="col-md-6">
        <form action="{{ route('produk.index') }}" method="GET" class="d-flex">
            <input type="text" name="search" class="form-control me-2" placeholder="Cari nama produk atau kategori..." value="{{ $search }}">
            <button class="btn btn-primary" type="submit">Cari</button>
        </form>
    </div>
</div>

<div class="row">
    @forelse($produks as $item)
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
                    <p class="text-muted small mb-1">Kode: {{ $item->kode_produk }}</p>
                    <p class="text-primary fw-bold fs-5 mb-1">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                    <p class="text-secondary small mb-3">Stok: {{ $item->stok }} unit</p>
                    <a href="{{ route('produk.show', $item->id) }}" class="btn btn-outline-primary mt-auto w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted fs-5">Produk tidak ditemukan.</p>
        </div>
    @endforelse
</div>
@endsection
