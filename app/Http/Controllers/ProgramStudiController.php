<?php

namespace App\Http\Controllers;
use App\Models\ProgramStudi;
use App\Models\Dosen;
use App\Models\StafTeknisi; 
use App\Models\InfoAkademik;
use App\Models\Fasilitas;
use App\Models\Artikel;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProgramStudiController extends Controller
{

    public function __construct()
    {
        // Kirim data program studi ke layout 'app'
        View::share('allProgramStudis', ProgramStudi::all()); 

        // Kirim data kategori fasilitas ke layout 'app'
        $kategoriFasilitas = Fasilitas::select('kategori')->distinct()->get();
        View::share('kategoriFasilitas', $kategoriFasilitas);

        // Kirim data kategori info akademik ke layout 'app'
        $kategoriAkademik = InfoAkademik::select('kategori')->distinct()->get();
        View::share('kategoriAkademik', $kategoriAkademik);
    }

    // ini beranda bagian  
    public function beranda()
    {
        // 1. Ambil 3 Artikel terbaru
        $latestArtikels = Artikel::latest('tanggal_publish')->take(3)->get();

        // 2. Ambil 3 Prestasi terbaru
        $latestPrestasis = Prestasi::latest('tanggal')->take(3)->get();

        // 3. Kirim ke view
        return view('beranda', [
            'latestArtikels' => $latestArtikels,
            'latestPrestasis' => $latestPrestasis
        ]);
    }

    // ini dosen bagian
    public function dosen()
    {
        // 1. Ambil semua data dosen dari database
       $dataProgramStudis = ProgramStudi::with('dosens')->get();

        // 2. Kirim data itu ke view baru bernama 'dosen'
        return view('dosen', [
            'dataProgramStudis' => $dataProgramStudis
        ]);
    }

    // detail dosen
    public function detailDosen($id)
    {
        // Cari dosen berdasarkan ID, kalo gak ada 404
        $dosen = Dosen::findOrFail($id);

        return view('dosen-detail', [
            'dosen' => $dosen
        ]);
    }

    // ini prodi bagian
    public function prodi()
    {
        // Ambil data lewat View::share tadi sebenernya udah cukup, 
        return view('prodi');
    }

    // Halaman Detail Prodi
    public function detailProdi($slug)
    {
        // Cari prodi berdasarkan SLUG
        $prodi = ProgramStudi::where('slug', $slug)->firstOrFail();

        return view('prodi-detail', [
            'prodi' => $prodi
        ]);
    }

    // ini staf dan teknisi
        public function staf()
        {
            // GANTI JADI 'stafs'
            $dataProgramStudis = ProgramStudi::with('stafs')->get(); 
            return view('staf', [
                'dataProgramStudis' => $dataProgramStudis
            ]);
        }

    // ini fasilitas bagia
    public function fasilitas($kategori = null)
    {
        // Skenario 1: User milih Kategori tertentu (misal: /fasilitas/laboratorium)
        if ($kategori) {
            // Kita balikin slug jadi teks biasa (misal: "ruang-dosen" -> "Ruang Dosen")
            // Asumsi di database kamu pake huruf kapital di awal kata
            $namaKategori = ucwords(str_replace('-', ' ', $kategori));
            
            // Ambil data sesuai kategori
            $fasilitas = Fasilitas::where('kategori', $namaKategori)->get();
            
            // Kirim ke view (Mode: Single Category)
            return view('fasilitas', [
                'mode' => 'single',
                'judul' => $namaKategori,
                'fasilitas' => $fasilitas
            ]);
        }

        // Skenario 2: User milih "Semua Fasilitas" (misal: /fasilitas)
        else {
            // Ambil semua dan kelompokkan
            $fasilitasGrouped = Fasilitas::all()->groupBy('kategori');

            // Kirim ke view (Mode: Grouped/All)
            return view('fasilitas', [
                'mode' => 'all',
                'judul' => 'SEMUA FASILITAS',
                'fasilitasGrouped' => $fasilitasGrouped
            ]);
        }
    }

    // ini akademik bagian
    public function akademik($kategori = null)
    {
        if ($kategori) {
            // Slug ke Normal (misal: "jadwal-kuliah" -> "Jadwal Kuliah")
            $namaKategori = ucwords(str_replace('-', ' ', $kategori));
            
            $items = InfoAkademik::where('kategori', $namaKategori)
                        ->where('status', 'published') // Cuma yang published
                        ->get();
            
            return view('akademik', [
                'mode' => 'single',
                'judul' => $namaKategori,
                'items' => $items
            ]);
        } else {
            // Grouping semua
            $itemsGrouped = InfoAkademik::where('status', 'published')
                                ->get()
                                ->groupBy('kategori');

            return view('akademik', [
                'mode' => 'all',
                'judul' => 'INFORMASI AKADEMIK',
                'itemsGrouped' => $itemsGrouped
            ]);
        }
    }

    // detail akademik
    public function detailAkademik($slug)
    {
        // Cari data berdasarkan SLUG
        $info = InfoAkademik::where('slug', $slug)->firstOrFail();

        return view('akademik-detail', [
            'info' => $info
        ]);
    }

    // LOGIC UNTUK ARTIKEL
    public function artikel()
    {
        // Ambil artikel terbaru, urutkan dari yang paling baru
        $artikels = Artikel::latest('tanggal_publish')->get();
        return view('artikel', ['artikels' => $artikels]);
    }

    public function detailArtikel($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        return view('artikel-detail', ['artikel' => $artikel]);
    }

    // LOGIC UNTUK PRESTASI
    public function prestasi()
    {
        // Ambil prestasi terbaru
        $prestasis = Prestasi::latest('tanggal')->get();
        return view('prestasi', ['prestasis' => $prestasis]);
    }

    public function detailPrestasi($slug)
    {
        $prestasi = Prestasi::where('slug', $slug)->firstOrFail();
        return view('prestasi-detail', ['prestasi' => $prestasi]);
    }

}
