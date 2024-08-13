<?php

namespace App\Filament\Resources\CourResource\Pages;

use App\Filament\Resources\CourResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCour extends EditRecord
{
    protected static string $resource = CourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
