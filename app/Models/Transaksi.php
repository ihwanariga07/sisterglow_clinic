<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    // Nama tabel di database (karena tabel singular)
    protected $table = 'transaksi';

    // Kolom yang bisa diisi massal
    protected $fillable = [
        'no_transaksi',
        'tgl_transaksi',
        'booking_id',
        'total_bayar',
        'metode_pembayaran',
        'status',
    ];

    // Relasi: transaksi milik pasien
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    // Relasi: transaksi bisa punya banyak transaksi_detail
    public function transaksiDetails()
    {
        return $this->hasMany(TransaksiDetail::class, 'transaksi_id');
    }
}
