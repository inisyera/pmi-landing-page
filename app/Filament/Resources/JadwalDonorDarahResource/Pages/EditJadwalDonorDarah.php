<?php

namespace App\Filament\Resources\JadwalDonorDarahResource\Pages;

use App\Filament\Resources\JadwalDonorDarahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalDonorDarah extends EditRecord
{
    protected static string $resource = JadwalDonorDarahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
