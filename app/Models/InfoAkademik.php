<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfoAkademik extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'kategori',
        'thumbnail',
        'status',
        'published_at',
    ];
}
