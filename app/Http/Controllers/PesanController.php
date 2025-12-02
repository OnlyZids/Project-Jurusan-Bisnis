<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesanKontak;

class PesanController extends Controller
{   
    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'nama'   => 'required|string|max:255',
            'email'  => 'required|email',
            'subjek' => 'required|string|max:255',
            'pesan'  => 'required|string',
        ]);

        // 2. Simpan ke Database
        PesanKontak::create([
            'nama'   => $request->nama,
            'email'  => $request->email,
            'subjek' => $request->subjek,
            'pesan'  => $request->pesan,
        ]);

        // 3. Kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}
