<?php

namespace App\Filament\Resources\ReponseResource\Pages;

use App\Filament\Resources\ReponseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReponse extends EditRecord
{
    protected static string $resource = ReponseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
