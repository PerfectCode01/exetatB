<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Nombre total des utilisateurs', '0')
                ->description('pas d\'inscrit pour l\'instant')
                ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('les entrées en FC', '0FC')
                ->description('pas d\'entree pour l\'instant')
                ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('les entrées en dollard americain', '0$')
                ->description('pas d\'entree pour l\'instant')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
