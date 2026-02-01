<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained('pasien')->onDelete('cascade');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('status');
            $table->timestamps();
        });

    }
        public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
