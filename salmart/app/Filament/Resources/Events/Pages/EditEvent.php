<?php

namespace App\Filament\Resources\Events\Pages;

use App\Filament\Resources\Events\EventResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEvent extends EditRecord
{
    protected static string $resource = EventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('view')
                ->label('View page')
                ->color('gray')
                ->url('/portfolio-detail-'.$this->getRecord()->slug)
                ->openUrlInNewTab(),
            DeleteAction::make(),
        ];
    }
}
