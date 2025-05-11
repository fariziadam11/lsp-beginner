<?php

namespace App\Filament\Resources\KosentrasiResource\Pages;

use App\Filament\Resources\KosentrasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKosentrasis extends ListRecords
{
    protected static string $resource = KosentrasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
