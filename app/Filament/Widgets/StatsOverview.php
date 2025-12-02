<?php

namespace App\Filament\Widgets;

use App\Models\Dosen;
use App\Models\StafTeknisi; 
use App\Models\ProgramStudi;
use App\Models\InfoAkademik;
use App\Models\Fasilitas;
use App\Models\PesanKontak;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // 1. TOTAL DOSEN
            Stat::make('Total Dosen', Dosen::count())
                ->description('Dosen aktif')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('success') // Warna hijau
                ->chart([7, 2, 10, 3, 15, 4, 17]), 

            // 2. TOTAL STAF
            Stat::make('Total Staf', StafTeknisi::count()) 
                ->description('Tenaga kependidikan')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary') // Warna biru
                ->chart([10, 2, 8, 3, 10, 4, 10]),

            // 3. TOTAL PROGRAM STUDI
            Stat::make('Program Studi', ProgramStudi::count())
                ->description('Jurusan Bisnis')
                ->descriptionIcon('heroicon-m-building-library')
                ->color('warning'), 

            // 4. TOTAL ARTIKEL/BERITA 
            Stat::make('Info Akademik', InfoAkademik::count())
                ->description('Berita & Pengumuman')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('danger'), 

            // 5. TOTAL FASILITAS 
            Stat::make('Fasilitas', Fasilitas::count())
                ->description('Fasilitas')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('info'), 


            // 6. TOTAL PESAN 
            Stat::make('Pesan Kontak', PesanKontak::count())
                ->description('Pesan Kontak')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('primary'), 
        ];
    }
}