<?php

namespace App\Filament\Resources\AlienaResource\Pages;

use App\Filament\Resources\AlienaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlienas extends ListRecords
{
    protected static string $resource = AlienaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
