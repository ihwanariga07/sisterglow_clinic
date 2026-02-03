<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';

    protected $fillable = [
        'nama_layanan',
        'kategori',
        'harga',
    ];

    // Relasi: layanan bisa ada di banyak booking_detail
    public function bookingDetails()
    {
        return $this->hasMany(BookingDetail::class, 'layanan_id');
    }
}