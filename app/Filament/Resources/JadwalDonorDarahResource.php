<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\JadwalDonorDarah;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JadwalDonorDarahResource\Pages;
use App\Filament\Resources\JadwalDonorDarahResource\RelationManagers;

class JadwalDonorDarahResource extends Resource
{
    protected static ?string $model = JadwalDonorDarah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('No')->required(),
                        TextInput::make('Lokasi')->required(),
                        TextInput::make('Alamat')->required(),
                        TextInput::make('Jam_Mulai')->required(),
                        TextInput::make('Jam_Selesai')->required(),
                        TextInput::make('Peruntukan')->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No')
                ->label('No')
                ->rowIndex()->sortable()->searchable(),
                TextColumn::make('Lokasi')->label('UDD PMI-Tempat')->sortable()->searchable(),
                TextColumn::make('Alamat')->sortable()->searchable(),
                TextColumn::make('Jam_Mulai')->label('Jam Mulai')->sortable()->searchable(),
                TextColumn::make('Jam_Selesai')->label('Jam Selesai')->sortable()->searchable(),
                TextColumn::make('Peruntukan')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListJadwalDonorDarahs::route('/'),
            'create' => Pages\CreateJadwalDonorDarah::route('/create'),
            'edit' => Pages\EditJadwalDonorDarah::route('/{record}/edit'),
        ];
    }
}
