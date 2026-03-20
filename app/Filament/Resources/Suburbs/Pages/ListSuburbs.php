<?php

namespace App\Filament\Resources\Suburbs\Pages;

use App\Filament\Resources\Suburbs\SuburbResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuburbs extends ListRecords
{
    protected static string $resource = SuburbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
