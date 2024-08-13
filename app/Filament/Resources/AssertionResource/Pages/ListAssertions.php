<?php

namespace App\Filament\Resources\AssertionResource\Pages;

use App\Filament\Resources\AssertionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssertions extends ListRecords
{
    protected static string $resource = AssertionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
