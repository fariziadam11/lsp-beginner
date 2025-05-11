<?php

namespace App\Filament\Resources\KosentrasiResource\Pages;

use App\Filament\Resources\KosentrasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKosentrasi extends EditRecord
{
    protected static string $resource = KosentrasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
