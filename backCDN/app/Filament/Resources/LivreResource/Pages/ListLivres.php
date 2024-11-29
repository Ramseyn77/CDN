<?php

namespace App\Filament\Resources\LivreResource\Pages;

use App\Filament\Resources\LivreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLivres extends ListRecords
{
    protected static string $resource = LivreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
