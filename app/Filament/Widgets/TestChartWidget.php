<?php

namespace App\Filament\Widgets;
use App\Models\User;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class TestChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Utilisateurs de l\'application';

    protected function getData(): array
    {
        $users = User::select(
                DB::raw('COUNT(id) as count'),
                DB::raw('strftime(\'%m\', created_at) as month')
            )
            ->groupBy('month')
            ->pluck('count', 'month');

        $data = array_fill(1, 12, 0);

        foreach ($users as $month => $count) {
            $data[(int)$month] = $count; // Conversion du mois en entier pour l'indexation
        }

        return [
            'datasets' => [
                [
                    'label' => 'Utilisateurs inscrits',
                    'data' => array_values($data),
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }
    

    protected function getType(): string
    {
        return 'line';
    }
    
}
