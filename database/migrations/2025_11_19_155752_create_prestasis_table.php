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
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Misal: Juara 1 Lomba Web Design
            $table->string('slug')->unique();
            $table->string('foto')->nullable(); // Foto penyerahan piala/sertif
            $table->text('deskripsi'); // Keterangan singkat
            $table->string('pemenang')->nullable(); // Nama Mahasiswa/Dosen (Opsional)
            $table->string('tingkat')->nullable(); // Nasional, Internasional, Provinsi (Opsional)
            $table->date('tanggal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};
