<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LivreResource\Pages;
use App\Filament\Resources\LivreResource\RelationManagers;
use App\Filament\Resources\LivreResource\RelationManagers\TitresRelationManager;
use App\Filament\Resources\TitreResource\RelationManagers\ArticlesRelationManager;
use App\Models\Livre;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LivreResource extends Resource
{
    protected static ?string $model = Livre::class;

    protected static ?string $navigationGroup = 'Resource Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            TitresRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLivres::route('/'),
            'create' => Pages\CreateLivre::route('/create'),
            'edit' => Pages\EditLivre::route('/{record}/edit'),
        ];
    }    
}
