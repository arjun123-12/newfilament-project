<?php

namespace App\Filament\Resources\Suburbs\Schemas;

use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SuburbForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('suburbname')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('services'),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('suburb_content')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
