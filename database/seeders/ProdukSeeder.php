<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'kode_produk' => 'P001',
                'nama_produk' => 'Kaos SMK Kreatif',
                'kategori'    => 'Fashion',
                'harga'       => 75000,
                'stok'        => 20,
                'deskripsi'   => 'Kaos kelas/sekolah warna biru adem dan nyaman.',
                'gambar'      => 'Produk/Kaos SMK Kreatif.jpeg',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'kode_produk' => 'P002',
                'nama_produk' => 'Totebag Edukasi',
                'kategori'    => 'Aksesori',
                'harga'       => 45000,
                'stok'        => 15,
                'deskripsi'   => 'Totebag puffy bahan lembut warna soft pink.',
                'gambar'      => 'Produk/Totebag Edukasi.jpg',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'kode_produk' => 'P003',
                'nama_produk' => 'Notebook Pelajar',
                'kategori'    => 'Alat Tulis',
                'harga'       => 25000,
                'stok'        => 30,
                'deskripsi'   => 'Loose-leaf notebook aesthetic transparan pink.',
                'gambar'      => 'Produk/Notebook Pelajar.jpeg',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'kode_produk' => 'P004',
                'nama_produk' => 'Tumbler Sekolah',
                'kategori'    => 'Aksesori',
                'harga'       => 65000,
                'stok'        => 18,
                'deskripsi'   => 'Tumbler minum TYESO floral motif light blue.',
                'gambar'      => 'Produk/Tumbler Sekolah.webp',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'kode_produk' => 'P005',
                'nama_produk' => 'Stiker Kreatif',
                'kategori'    => 'Aksesori',
                'harga'       => 15000,
                'stok'        => 50,
                'deskripsi'   => 'Paket stiker lucu bernuansa pink & biru.',
                'gambar'      => 'Produk/Stiker Kreatif.jpeg',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'kode_produk' => 'P006',
                'nama_produk' => 'Pin Ekskul',
                'kategori'    => 'Aksesori',
                'harga'       => 10000,
                'stok'        => 40,
                'deskripsi'   => 'Pin badge cantik bertema pastel pink.',
                'gambar'      => 'Produk/Pin Ekskul.jpg',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'kode_produk' => 'P007',
                'nama_produk' => 'Topi Sekolah',
                'kategori'    => 'Fashion',
                'harga'       => 55000,
                'stok'        => 12,
                'deskripsi'   => 'Topi seragam sekolah warna biru & merah.',
                'gambar'      => 'Produk/Topi Sekolah.jpg',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'kode_produk' => 'P008',
                'nama_produk' => 'Mug Kelas',
                'kategori'    => 'Perlengkapan',
                'harga'       => 35000,
                'stok'        => 25,
                'deskripsi'   => 'Mug custom souvenir guru/kelas.',
                'gambar'      => 'Produk/Mug Kelas.jpg',
                'created_at'  => now(),
                'updated_at'  => now()
            ]
        ]);
    }
}
