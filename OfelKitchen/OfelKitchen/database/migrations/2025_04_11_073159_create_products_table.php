<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Kolom ID auto-increment primary key
            $table->string('nama_produk'); // Nama produk (VARCHAR)
            $table->text('deskripsi')->nullable(); // Deskripsi (TEXT), boleh kosong
            $table->decimal('harga', 10, 2); // Harga (DECIMAL, total 10 digit, 2 di belakang koma)
            $table->integer('stok')->default(0); // Stok (INTEGER), default 0
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
