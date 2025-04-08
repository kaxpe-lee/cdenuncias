<?php

namespace App\Filament\Resources\DenuncianteResource\Pages;

use App\Filament\Resources\DenuncianteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDenunciantes extends ListRecords
{
    protected static string $resource = DenuncianteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
