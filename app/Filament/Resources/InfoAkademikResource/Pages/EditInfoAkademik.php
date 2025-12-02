<?php

namespace App\Filament\Resources\InfoAkademikResource\Pages;

use App\Filament\Resources\InfoAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInfoAkademik extends EditRecord
{
    protected static string $resource = InfoAkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
