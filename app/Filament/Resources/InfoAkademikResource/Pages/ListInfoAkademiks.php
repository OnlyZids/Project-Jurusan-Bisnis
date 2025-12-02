<?php

namespace App\Filament\Resources\InfoAkademikResource\Pages;

use App\Filament\Resources\InfoAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInfoAkademiks extends ListRecords
{
    protected static string $resource = InfoAkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
             ->label('Tambah Akademik') // <-- INI KUNCINYA
                ->icon('heroicon-o-plus'),
        ];
    }
}
