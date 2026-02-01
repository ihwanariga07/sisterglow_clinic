<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('layanan', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED auto-increment
            $table->string('nama_layanan');
            $table->string('kategori');
            $table->decimal('harga', 12, 2); // bisa menampung harga dengan pecahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan');
    }
};
