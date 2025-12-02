<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'slug', 'thumbnail', 'konten', 'penulis', 'tanggal_publish'
    ];
    
    // Casting tanggal biar otomatis jadi objek Carbon
    protected $casts = [
        'tanggal_publish' => 'date',
    ];
}
