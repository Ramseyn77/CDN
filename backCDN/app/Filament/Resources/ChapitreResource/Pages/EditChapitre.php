<?php

namespace App\Filament\Resources\ChapitreResource\Pages;

use App\Filament\Resources\ChapitreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChapitre extends EditRecord
{
    protected static string $resource = ChapitreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
