<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StafTeknis;

class ProgramStudi extends Model
{
    protected $fillable = [
        'nama_prodi',
        'slug',
        'jenjang',
        'deskripsi_singkat',
        'visi_misi',
        'foto_banner',
        'tujuan',
        'profil_lulusan',
        'gambar_mata_kuliah',
        'keterangan_mata_kuliah',
        'gambar_akreditasi',
        'keterangan_akreditasi',
    ];

    public function dosens()
    {
        return $this->belongsToMany(Dosen::class);
    }

    public function stafs()
    {
        return $this->hasMany(stafteknisi::class);
    }
}
