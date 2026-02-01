<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi');
            $table->date('tgl_transaksi');
            $table->foreignId('booking_id')->constrained('booking')->onDelete('cascade');
            $table->bigInteger('total_bayar');
            $table->string('metode_pembayaran');
            $table->string('status');
            $table->timestamps();
        });



    }
        public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
