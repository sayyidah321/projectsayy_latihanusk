<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function home()
{
    $produks = Produk::take(4)->get();
    return view('produk.home', compact('produks'));
}
    public function index(Request $request)
    {
        $search = $request->input('search');

        $produks = Produk::when($search, function ($query, $search) {
            return $query->where('nama_produk', 'like', "%{$search}%")
                         ->orWhere('kategori', 'like', "%{$search}%");
        })->get();

        return view('produk.index', compact('produks', 'search'));
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    public function admin()
    {
        $produks = Produk::all();
        return view('produk.admin', compact('produks'));
    }

    // Form Tambah
    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_produk' => 'required|unique:produks',
            'nama_produk' => 'required',
            'kategori'    => 'required',
            'harga'       => 'required|numeric|min:0',
            'stok'        => 'required|numeric|min:0',
            'deskripsi'   => 'required',
            'gambar'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'kode_produk.required' => 'Kode produk wajib diisi.',
            'kode_produk.unique'   => 'Kode produk sudah terdaftar.',
            'harga.numeric'        => 'Harga harus berupa angka.',
            'stok.numeric'         => 'Stok harus berupa angka.',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        Produk::create($data);

        return redirect()->route('produk.admin')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Form Edit
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    // Proses Update
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $request->validate([
            'kode_produk' => 'required|unique:produks,kode_produk,' . $id,
            'nama_produk' => 'required',
            'kategori'    => 'required',
            'harga'       => 'required|numeric|min:0',
            'stok'        => 'required|numeric|min:0',
            'deskripsi'   => 'required',
            'gambar'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'harga.numeric' => 'Harga harus berupa angka.',
            'stok.numeric'  => 'Stok harus berupa angka.',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if ($produk->gambar) {
                Storage::disk('public')->delete($produk->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        $produk->update($data);

        return redirect()->route('produk.admin')->with('success', 'Data produk berhasil diperbarui!');
    }

    // Proses Hapus
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        if ($produk->gambar) {
            Storage::disk('public')->delete($produk->gambar);
        }
        $produk->delete();

        return redirect()->route('produk.admin')->with('success', 'Data produk berhasil dihapus!');
    }
}
