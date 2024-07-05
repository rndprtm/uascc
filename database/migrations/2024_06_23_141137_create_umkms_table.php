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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('modal');
            $table->string('pemilik');
            $table->string('alamat');
            $table->string('website');
            $table->string('email');
            $table->string('rating');
            $table->string('kabkota_id');
            $table->integer('kategori_umkm_id');
            $table->integer('pembina_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
