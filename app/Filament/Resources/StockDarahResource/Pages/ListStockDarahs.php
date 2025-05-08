<?php

namespace App\Filament\Resources\StockDarahResource\Pages;

use App\Filament\Resources\StockDarahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStockDarahs extends ListRecords
{
    protected static string $resource = StockDarahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
