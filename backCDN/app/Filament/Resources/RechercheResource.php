<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RechercheResource\Pages;
use App\Filament\Resources\RechercheResource\RelationManagers;
use App\Models\Recherche;
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

class RechercheResource extends Resource
{
    protected static ?string $model = Recherche::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Historic';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                ->label('User')
                ->relationship('user','nom')
                ->required(),
                TextInput::make('mot')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.nom')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('mot')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRecherches::route('/'),
            'create' => Pages\CreateRecherche::route('/create'),
            'edit' => Pages\EditRecherche::route('/{record}/edit'),
        ];
    }    
}
