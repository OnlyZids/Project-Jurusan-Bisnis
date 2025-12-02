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
        Schema::create('staf_teknisis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('posisi');

            $table->foreignId('program_studi_id')
              ->nullable()
              ->constrained('program_studis') // Pastiin nama tabelnya bener
              ->onDelete('set null');

            $table->string('email')->unique()->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staf_teknisis');
    }
};
