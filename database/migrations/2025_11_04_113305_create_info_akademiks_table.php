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
        Schema::create('info_akademiks', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique(); // Untuk URL (cth: /info/jadwal-uas)
            $table->longText('konten'); // Isi artikel/pengumuman
            $table->string('thumbnail')->nullable(); // Gambar sampul
            $table->enum('status', ['published', 'draft'])->default('draft');
            $table->timestamp('published_at')->nullable(); // Kapan dipublish
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_akademiks');
    }
};
