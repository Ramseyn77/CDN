<?php

namespace App\Filament\Resources\LivreResource\Pages;

use App\Filament\Resources\LivreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLivre extends EditRecord
{
    protected static string $resource = LivreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
