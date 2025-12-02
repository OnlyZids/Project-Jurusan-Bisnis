<?php

namespace App\Filament\Resources\StafTeknisiResource\Pages;

use App\Filament\Resources\StafTeknisiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStafTeknisis extends ListRecords
{
    protected static string $resource = StafTeknisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
             ->label('Tambah StafTeknisi') // <-- INI KUNCINYA
                ->icon('heroicon-o-plus'),
        ];
    }
}
