<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Support\Enums\MaxWidth;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestUsersWidget extends BaseWidget
{
    protected function getContainerAttributes(): array
    {
        return [
            'class' => 'w-full', // Assurez-vous que le widget utilise toute la largeur disponible
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(
                User::query()->latest()->limit(5) // Obtenir les 5 derniers utilisateurs inscrits
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Registered At')
                    ->dateTime()
            ])
            ->filtersFormWidth(MaxWidth::Full); // Assurez-vous que cela n'affecte pas la largeur du tableau
    }
}
