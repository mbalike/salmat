<?php

namespace App\Filament\Resources\Events\Tables;

use App\Models\Event;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover_image')
                    ->label('Cover')
                    ->disk('site')
                    ->visibility('public'),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->wrap(),
                TextColumn::make('category.name')
                    ->label('Category')
                    ->badge(),
                TextColumn::make('start_date')
                    ->label('Date')
                    ->state(fn (Event $record): string => $record->date_label)
                    ->sortable(),
                TextColumn::make('location')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('department')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('start_date', 'desc')
            ->filters([
                SelectFilter::make('event_category_id')
                    ->label('Category')
                    ->relationship('category', 'name'),
                SelectFilter::make('department')
                    ->options(array_combine(Event::DEPARTMENTS, Event::DEPARTMENTS)),
            ])
            ->recordActions([
                Action::make('view')
                    ->label('View page')
                    ->icon(Heroicon::OutlinedArrowTopRightOnSquare)
                    ->color('gray')
                    ->url(fn (Event $record): string => '/portfolio-detail-'.$record->slug)
                    ->openUrlInNewTab(),
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}
