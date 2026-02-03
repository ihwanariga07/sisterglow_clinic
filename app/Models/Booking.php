<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $fillable = [
        'pasien_id',
        'tanggal',
        'jam',
        'status',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }

    public function bookingDetails()
    {
        return $this->hasMany(BookingDetail::class, 'booking_id');
    }
}
