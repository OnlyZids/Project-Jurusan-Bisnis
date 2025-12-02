<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StafTeknisi extends Model
{

    protected $fillable = [
        'nama_lengkap',
        'posisi',
        'email',
        'foto',
    ];


    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }
}
