<?php

namespace App\Filament\Resources\RelacionResource\Pages;

use App\Filament\Resources\RelacionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRelacions extends ManageRecords
{
    protected static string $resource = RelacionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
