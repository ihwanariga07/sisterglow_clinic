<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::insert([
            [
                'nama_produk' => 'Serum Whitening',
                'harga' => 120000,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Facial Wash Acne',
                'harga' => 75000,
                'stok' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Moisturizer',
                'harga' => 90000,
                'stok' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
