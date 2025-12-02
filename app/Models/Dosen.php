<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'nip',
        'jabatan_fungsional',
        'email',
        'foto',
        'bidang_keahlian',
    ];

    public function programStudis()
    {
        return $this->belongsToMany(ProgramStudi::class);
    }
}
