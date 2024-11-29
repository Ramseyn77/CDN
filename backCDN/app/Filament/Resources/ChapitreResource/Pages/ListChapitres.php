<?php

namespace App\Filament\Resources\ChapitreResource\Pages;

use App\Filament\Resources\ChapitreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChapitres extends ListRecords
{
    protected static string $resource = ChapitreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
