<?php

namespace App\Filament\Resources\ConcienciaResource\Pages;

use App\Filament\Resources\ConcienciaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageConciencias extends ManageRecords
{
    protected static string $resource = ConcienciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
