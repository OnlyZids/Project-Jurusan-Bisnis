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
        Schema::table('program_studis', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('program_studis', function (Blueprint $table) {
            $table->text('tujuan')->nullable()->after('visi_misi');
            $table->longText('profil_lulusan')->nullable()->after('tujuan');
            $table->string('gambar_mata_kuliah')->nullable()->after('profil_lulusan');
            $table->text('keterangan_mata_kuliah')->nullable()->after('gambar_mata_kuliah');
            $table->string('gambar_akreditasi')->nullable()->after('keterangan_mata_kuliah');
            $table->text('keterangan_akreditasi')->nullable()->after('gambar_akreditasi');
        });
    }
};
