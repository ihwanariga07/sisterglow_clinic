<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('booking')->onDelete('cascade');
            $table->integer('total_bayar');
            $table->string('metode_pembayaran');
            $table->string('status');
            $table->timestamps();
        });



    }
};
