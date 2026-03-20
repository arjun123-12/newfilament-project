<?php

namespace App\Filament\Resources\Suburbs;

use App\Filament\Resources\Suburbs\Pages\CreateSuburb;
use App\Filament\Resources\Suburbs\Pages\EditSuburb;
use App\Filament\Resources\Suburbs\Pages\ListSuburbs;
use App\Filament\Resources\Suburbs\Schemas\SuburbForm;
use App\Filament\Resources\Suburbs\Tables\SuburbsTable;
use App\Models\Suburb;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SuburbResource extends Resource
{
    protected static ?string $model = Suburb::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'suburb';

    public static function form(Schema $schema): Schema
    {
        return SuburbForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SuburbsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSuburbs::route('/'),
            'create' => CreateSuburb::route('/create'),
            'edit' => EditSuburb::route('/{record}/edit'),
        ];
    }
}
