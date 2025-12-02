<?php

namespace App\Filament\Resources\StafTeknisiResource\Pages;

use App\Filament\Resources\StafTeknisiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStafTeknisi extends EditRecord
{
    protected static string $resource = StafTeknisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
