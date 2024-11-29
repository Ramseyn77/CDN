<?php

namespace App\Filament\Resources\TitreResource\Pages;

use App\Filament\Resources\TitreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTitre extends EditRecord
{
    protected static string $resource = TitreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
