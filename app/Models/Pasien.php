<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    // Kolom yang bisa diisi massal
    protected $fillable = [
        'user_id',
        'nama',
        'no_hp',
        'alamat',
    ];

    // Relasi: seorang pasien punya user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi: pasien punya banyak booking
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'pasien_id');
    }
}
