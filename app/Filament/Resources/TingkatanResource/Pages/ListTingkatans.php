<?php

namespace App\Filament\Resources\TingkatanResource\Pages;

use App\Filament\Resources\TingkatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTingkatans extends ListRecords
{
    protected static string $resource = TingkatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
