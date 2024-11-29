<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Filament\Resources\ArticleResource\RelationManagers\AlienasRelationManager;
use App\Filament\Resources\ArticleResource\RelationManagers\EventsRelationManager;
use App\Filament\Resources\ArticleResource\RelationManagers\CommentsRelationManager;
use App\Filament\Resources\ArticleResource\RelationManagers\QuestionsRelationManager;
use App\Models\Article;
use App\Models\Chapitre;
use App\Models\Section;
use App\Models\Titre;
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

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationGroup = 'Resource Management';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        $chapitres = Chapitre::all();
        $optionsChapitres = $chapitres->pluck('nom', 'id')->toArray();

        $sections = Section::all();
        $optionsSections = $sections->pluck('nom', 'id')->toArray();

        return $form
            ->schema([
                Select::make('titre_id')
                ->label('Titre')
                ->relationship('titre','nom')
                ->required(),
                Select::make('chapitre_id')
                ->label('Chapitre')
                ->relationship('chapitre','nom'),
                Select::make('section_id')
                ->label('Section')
                ->relationship('section','nom'),
                TextInput::make('nom')->required(),
                TextInput::make('numero')->required(),
                MarkdownEditor::make('contenu')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('numero')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nom')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('section.nom')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('section.chapitre.nom')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('section.chapitre.titre.nom')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('section.chapitre.titre.livre.nom')
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
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            AlienasRelationManager::class,
            EventsRelationManager::class,
            CommentsRelationManager::class,
            QuestionsRelationManager::class

        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }    
}
