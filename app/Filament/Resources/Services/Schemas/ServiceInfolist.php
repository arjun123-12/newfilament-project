<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ServiceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('first_content')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('first_img')
                    ->placeholder('-'),
                TextEntry::make('first_img_alt')
                    ->placeholder('-'),
                TextEntry::make('full_content')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('second_content')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('second_img')
                    ->placeholder('-'),
                TextEntry::make('second_img_alt')
                    ->placeholder('-'),
                TextEntry::make('full_content_second')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('title'),
                TextEntry::make('slug')
                    ->placeholder('-'),
                TextEntry::make('service_name')
                    ->placeholder('-'),
                ImageEntry::make('card_image')
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->columnSpanFull(),
                RepeatableEntry::make('faqs')
                    ->schema([
                        TextEntry::make('question'),
                        TextEntry::make('answer'),
                    ]),

                RepeatableEntry::make('testimonials')
                    ->schema([
                        TextEntry::make('name'),
                        TextEntry::make('testimonial'),
                    ]),
                TextEntry::make('banner_text')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->numeric(),
                TextEntry::make('city_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('suburbname')
                    ->placeholder('-'),
                TextEntry::make('keywords')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('suburb_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
