<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Nama tabel di database (karena tabel singular)
    protected $table = 'produk';

    // Kolom yang bisa diisi massal
    protected $fillable = [
        'nama_produk',
        'harga',
        'stok',
    ];

    // Relasi: produk bisa ada di banyak transaksi_detail
    public function transaksiDetails()
    {
        return $this->hasMany(TransaksiDetail::class, 'produk_id');
    }
}
