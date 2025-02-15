<?php

namespace App\Filament\Resources\ReponseResource\Pages;

use App\Filament\Resources\ReponseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReponses extends ListRecords
{
    protected static string $resource = ReponseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
