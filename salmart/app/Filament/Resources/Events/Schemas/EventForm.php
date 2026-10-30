<?php

namespace App\Filament\Resources\Events\Schemas;

use App\Models\Event;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Event')
                    ->columns(2)
                    ->components([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Set $set, ?string $state, string $operation): void {
                                if ($operation === 'create') {
                                    $set('slug', Str::slug((string) $state));
                                }
                            }),
                        TextInput::make('slug')
                            ->label('Web address')
                            ->prefix('/portfolio-detail-')
                            ->required()
                            ->maxLength(255)
                            ->alphaDash()
                            ->unique(ignoreRecord: true)
                            ->notIn(Event::RESERVED_SLUGS)
                            ->validationMessages(['not_in' => 'One of the existing event pages already uses this web address.']),
                        Textarea::make('meta_description')
                            ->label('Search engine description')
                            ->helperText('Optional. If left blank, the start of the event details is used.')
                            ->rows(2)
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ]),

                Section::make('Photos')
                    ->columns(2)
                    ->components([
                        static::photoUpload('cover_image')
                            ->label('Cover photo')
                            ->helperText('Shown at the top of the event page and on its card on the events page.')
                            ->required(),
                        Select::make('hero_position')
                            ->label('Cover photo focus')
                            ->helperText('Which part of the cover photo stays visible at the top of the event page.')
                            ->options([
                                'center 15%' => 'Top of the photo',
                                'center 35%' => 'Upper middle',
                                'center 50%' => 'Middle',
                                'center 80%' => 'Bottom of the photo',
                            ])
                            ->default('center 35%')
                            ->selectablePlaceholder(false)
                            ->required(),
                        static::photoUpload('gallery')
                            ->label('Gallery')
                            ->helperText('Drag to reorder. The first 6 show on the page, and the rest open in the photo viewer.')
                            ->multiple()
                            ->appendFiles()
                            ->reorderable()
                            ->panelLayout('grid')
                            ->maxParallelUploads(3)
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Section::make('Event Details')
                    ->components([
                        Textarea::make('details')
                            ->label('Description')
                            ->helperText('Leave a blank line between paragraphs.')
                            ->rows(6)
                            ->required(),
                        Repeater::make('overview')
                            ->helperText('Delete any rows you don\'t need.')
                            ->schema([
                                TextInput::make('label')
                                    ->required()
                                    ->maxLength(255)
                                    ->datalist(['Venue', 'Location', 'Guest of Honor', 'Client', 'Host Organization', 'Date']),
                                TextInput::make('value')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->columns(2)
                            ->default([
                                ['label' => 'Venue', 'value' => null],
                                ['label' => 'Client', 'value' => null],
                            ])
                            ->addActionLabel('Add overview row'),
                        Repeater::make('services')
                            ->label('Services delivered')
                            ->simple(TextInput::make('service')->required()->maxLength(255))
                            ->required()
                            ->addActionLabel('Add service'),
                        Textarea::make('experience')
                            ->label('Event experience')
                            ->helperText('Optional. Leave a blank line between paragraphs.')
                            ->rows(4),
                        Textarea::make('impact')
                            ->helperText('Optional. Leave a blank line between paragraphs.')
                            ->rows(4),
                        Repeater::make('partners')
                            ->label('Brands / partners covered')
                            ->simple(TextInput::make('partner')->required()->maxLength(255))
                            ->defaultItems(0)
                            ->addActionLabel('Add brand or partner'),
                    ]),

                Section::make('Summary')
                    ->columns(2)
                    ->components([
                        Select::make('event_category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique('event_categories', 'name'),
                            ]),
                        Select::make('department')
                            ->options(array_combine(Event::DEPARTMENTS, Event::DEPARTMENTS))
                            ->searchable()
                            ->required(),
                        DatePicker::make('start_date')
                            ->required(),
                        DatePicker::make('end_date')
                            ->helperText('Leave blank for a one-day event.')
                            ->afterOrEqual('start_date'),
                        TextInput::make('location')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('client')
                            ->helperText('Optional.')
                            ->maxLength(255),
                    ]),
            ]);
    }

    protected static function photoUpload(string $name): FileUpload
    {
        return FileUpload::make($name)
            ->disk('site')
            ->directory(Event::UPLOAD_DIRECTORY)
            ->visibility('public')
            ->image()
            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
            ->maxSize(10240);
    }
}
