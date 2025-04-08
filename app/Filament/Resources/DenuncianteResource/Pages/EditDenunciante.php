<?php

namespace App\Filament\Resources\DenuncianteResource\Pages;

use App\Filament\Resources\DenuncianteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDenunciante extends EditRecord
{
    protected static string $resource = DenuncianteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
