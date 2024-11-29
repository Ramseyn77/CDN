<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\User;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\FilamentServiceProvider; // Added for `Filament::make`

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $users = User::select('created_at')
            ->get()
            ->groupBy(function ($user) {
                return Carbon::parse($user->created_at);
            });

        $articles = Article::select('created_at')
            ->get()
            ->groupBy(function ($article) {
                return Carbon::parse($article->created_at);
            });

        $quantities = $users->count();
        $articlesCount = $articles->count();
        $date = Carbon::now()->format('d-m-Y H:i');

        return [
            Card::make('Users Number', $quantities)
                ->description('Increase') 
                ->url(route('filament.resources.users.index')) 
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Card::make('Articles', $articlesCount)
                ->description('Increase') 
                ->url(route('filament.resources.articles.index')) 
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Card::make('Day - Time', $date)
                ->descriptionIcon('heroicon-s-trending-up'),
        ];
    }
}
