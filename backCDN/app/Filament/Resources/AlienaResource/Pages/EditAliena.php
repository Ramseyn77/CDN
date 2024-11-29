<?php

namespace App\Filament\Resources\AlienaResource\Pages;

use App\Filament\Resources\AlienaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAliena extends EditRecord
{
    protected static string $resource = AlienaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
