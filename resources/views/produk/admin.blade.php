@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold">Manajemen Data Produk (Admin)</h3>
    <a href="{{ route('produk.create') }}" class="btn btn-success fw-bold">+ Tambah Produk Baru</a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="table-responsive bg-white p-3 rounded shadow-sm">
    <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Kode</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th width="150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $item)
            <tr>
                <td>{{ $item->kode_produk }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->kategori }}</td>
                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                <td>{{ $item->stok }}</td>
                <td>
                    <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                    <form action="{{ route('produk.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
