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
        Schema::create('dosen_program_studi', function (Blueprint $table) {
            // Kunci asing ke tabel program_studis
            $table->foreignId('program_studi_id')
                  ->constrained()
                  ->onDelete('cascade'); // Kalo prodinya dihapus, relasi ini ikut kehapus

            // Kunci asing ke tabel dosens
            $table->foreignId('dosen_id')
                  ->constrained()
                  ->onDelete('cascade'); // Kalo dosennya dihapus, relasi ini ikut kehapus

            // Bikin primary key gabungan biar gak ada data duplikat
            $table->primary(['program_studi_id', 'dosen_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen_program_studi');
    }
};
