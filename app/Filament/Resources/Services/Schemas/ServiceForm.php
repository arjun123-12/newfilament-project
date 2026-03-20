<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Hidden;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('first_content')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('first_img')
                    ->image()
                    ->directory('services'),
                TextInput::make('first_img_alt')
                    ->default(null),
                Textarea::make('full_content')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('second_content')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('second_img')
                    ->image()
                    ->directory('services'),
                TextInput::make('second_img_alt')
                    ->default(null),
                Textarea::make('full_content_second')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('suburb_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('suburbname')
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        if (!$get('is_slug_changed')) {
                            $set(
                                'slug',
                                Str::slug($state . '-' . ($get('service_name') ?? ''))
                            );
                        }
                    }),

                TextInput::make('service_name')
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        if (!$get('is_slug_changed')) {
                            $set(
                                'slug',
                                Str::slug(($get('suburbname') ?? '') . '-' . $state)
                            );
                        }
                    }),

                TextInput::make('slug')
                    ->required()
                    ->dehydrated()
                    ->live()
                    ->afterStateUpdated(fn(callable $set) => $set('is_slug_changed', true))
                    ->helperText('You can edit slug manually'),

                Hidden::make('is_slug_changed')
                    ->default(false),
                Textarea::make('keywords')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('card_image')
                    ->image()
                    ->disk('public') // 🔥 ADD THIS
                    ->directory('services'),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Repeater::make('faqs')
                    ->label('FAQs')
                    ->schema([
                        TextInput::make('question')
                            ->required()
                            ->placeholder('Enter question'),

                        Textarea::make('answer')
                            ->required()
                            ->placeholder('Enter answer')
                            ->columnSpanFull(),
                    ])
                    ->collapsible()
                    ->addActionLabel('Add FAQ')
                    ->columnSpanFull(),

                Repeater::make('testimonials')
                    ->label('Testimonials')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->placeholder('Customer name'),

                        Textarea::make('testimonial')
                            ->required()
                            ->placeholder('Write testimonial')
                            ->columnSpanFull(),
                    ])
                    ->collapsible()
                    ->addActionLabel('Add Testimonial')
                    ->columnSpanFull(),
                Textarea::make('banner_text')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('status')
                    ->required()
                    ->numeric()
                    ->default(1),
                // TextInput::make('city_id')
                //     ->numeric()
                //     ->default(null),

            ]);
    }
}
