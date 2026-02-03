<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;

    // Nama tabel di database (karena tabel singular)
    protected $table = 'transaksi_detail';

    // Kolom yang bisa diisi massal
    protected $fillable = [
        'transaksi_id',
        'produk_id',
        'jumlah',
        'subtotal',
    ];

    /**
     * Relasi: detail ini milik satu transaksi
     */
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }

    /**
     * Relasi: detail ini merujuk ke satu produk
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
