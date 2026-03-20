<?php

namespace App\Filament\Resources\Suburbs\Pages;

use App\Filament\Resources\Suburbs\SuburbResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSuburb extends EditRecord
{
    protected static string $resource = SuburbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
