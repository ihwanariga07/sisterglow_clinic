<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('booking_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('booking')->onDelete('cascade');
            $table->foreignId('layanan_id')->constrained('layanan')->onDelete('cascade');
            $table->integer('jumlah');
            $table->integer('subtotal');
            $table->timestamps();
        });


    }
};
