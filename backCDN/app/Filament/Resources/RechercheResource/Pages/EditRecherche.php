<?php

namespace App\Filament\Resources\RechercheResource\Pages;

use App\Filament\Resources\RechercheResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecherche extends EditRecord
{
    protected static string $resource = RechercheResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
