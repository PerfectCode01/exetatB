<?php

namespace App\Filament\Resources\AssertionResource\Pages;

use App\Filament\Resources\AssertionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssertion extends EditRecord
{
    protected static string $resource = AssertionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
