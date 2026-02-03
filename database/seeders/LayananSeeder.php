<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        Layanan::insert([
            [
                'nama_layanan' => 'Facial Basic',
                'kategori' => 'Kecantikan',
                'harga' => 150000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_layanan' => 'Facial Acne',
                'kategori' => 'Kecantikan',
                'harga' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_layanan' => 'Treatment Whitening',
                'kategori' => 'Perawatan',
                'harga' => 250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
