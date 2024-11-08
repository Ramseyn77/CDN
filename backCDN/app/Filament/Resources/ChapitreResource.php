<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChapitreResource\Pages;
use App\Filament\Resources\ChapitreResource\RelationManagers;
use App\Filament\Resources\ChapitreResource\RelationManagers\ArticlesRelationManager;
use App\Filament\Resources\ChapitreResource\RelationManagers\SectionsRelationManager;
use App\Models\Chapitre;
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

class ChapitreResource extends Resource
{
    protected static ?string $model = Chapitre::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Resource Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('titre_id')
                ->label('Titre')
                ->relationship('titre','nom')
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
                TextColumn::make('titre.nom')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('titre.livre.nom')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            SectionsRelationManager::class,
            ArticlesRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListChapitres::route('/'),
            'create' => Pages\CreateChapitre::route('/create'),
            'edit' => Pages\EditChapitre::route('/{record}/edit'),
        ];
    }    
}