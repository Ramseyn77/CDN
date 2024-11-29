<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TitreResource\Pages;
use App\Filament\Resources\TitreResource\RelationManagers;
use App\Filament\Resources\TitreResource\RelationManagers\ArticlesRelationManager;
use App\Filament\Resources\TitreResource\RelationManagers\ChapitresRelationManager;
use App\Models\Livre;
use App\Models\Titre;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TitreResource extends Resource
{
    protected static ?string $model = Titre::class;

    protected static ?string $navigationGroup = 'Resource Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('livre_id')
                ->label('Livre')
                ->relationship('livre','nom')
                ->required(),
                TextInput::make('nom')->required(),
                TextInput::make('numero')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('numero'),
                TextColumn::make('nom')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('livre.nom')
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
            ChapitresRelationManager::class,
            ArticlesRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTitres::route('/'),
            'create' => Pages\CreateTitre::route('/create'),
            'edit' => Pages\EditTitre::route('/{record}/edit'),
        ];
    }    
}
