<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use Carbon\Carbon;
use Filament\Widgets\LineChartWidget;

class VarticlesChart extends LineChartWidget
{
    protected static ?string $heading = 'Articles';

    protected function getData(): array{
        $articles= Article::select('created_at')->get()->groupBy(function($articles){
            return Carbon::parse($articles->created_at)->format('F');
        });
        $quantities = [];
        foreach ($articles as $article => $value) {
            array_push($quantities, $value->count());
        }
        return [
            'datasets' => [
                [
                    'label' => 'New Articles',
                    'data' => $quantities,
                    'backgroundColor' => [
                        'rgba(255,165,0,0.6)',
                    ]
                ],
            ],
            'labels' => $articles->keys(),
        ];
    }
    protected function getType(): string
    {
        return 'line';
    }
}
