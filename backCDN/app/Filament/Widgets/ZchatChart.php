<?php

namespace App\Filament\Widgets;

use App\Models\Comment;
use App\Models\Event;
use App\Models\Recherche;
use Carbon\Carbon;
use Filament\Widgets\DoughnutChartWidget;

class ZchatChart extends DoughnutChartWidget
{
    protected static ?string $heading = '';

    protected function getData(): array{
        $events= Event::select('created_at')->get()->groupBy(function($events){
            return Carbon::parse($events->created_at)->format('F');
        });
        $quantitie = [];
        foreach ($events as $event => $value) {
            array_push($quantitie, $value->count());
        }

        $recherches= Recherche::select('created_at')->get()->groupBy(function($recherches){
            return Carbon::parse($recherches->created_at)->format('F');
        });
        $quant = [];
        foreach ($recherches as $recherche => $value) {
            array_push($quant, $value->count());
        }

        $comments= Comment::select('created_at')->get()->groupBy(function($comments){
            return Carbon::parse($comments->created_at)->format('F');
        });
        $quantities = [];
        foreach ($comments as $comment => $value) {
            array_push($quantities, $value->count());
        }
        return [
            'datasets' => [
                [
                    'data' => [$quantitie,$quant, $quantities],
                    'backgroundColor' => [
                        'rgb(255,99,132)',
                        'rgb(54,162,235)',
                        'rgb(255,205,86)',
                    ]
                ],
            ],
            'labels' => ['Events', 'Recherches', 'Comments']
        ];
    }
}
