<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReponseResource\Pages;
use App\Filament\Resources\ReponseResource\RelationManagers;
use App\Models\Reponse;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReponseResource extends Resource
{
    protected static ?string $model = Reponse::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Learning Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('question_id')
                ->label('Question')
                ->relationship('question','contenu')
                ->required(),
                TextInput::make('status')
                ->required(),
                MarkdownEditor::make('contenu')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    TextColumn::make('question.contenu')
                        ->sortable()
                        ->searchable(),
                    TextColumn::make('question.article.nom')
                        ->sortable()
                        ->searchable(),
                    TextColumn::make('status')
                        ->sortable()
                        ->searchable(),
                    TextColumn::make('contenu')
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
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReponses::route('/'),
            'create' => Pages\CreateReponse::route('/create'),
            'edit' => Pages\EditReponse::route('/{record}/edit'),
        ];
    }    
}
