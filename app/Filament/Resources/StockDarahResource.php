<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\StockDarah;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StockDarahResource\Pages;
use App\Filament\Resources\StockDarahResource\RelationManagers;

class StockDarahResource extends Resource
{
    protected static ?string $model = StockDarah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('No')->required(),
                        TextInput::make('KabKota')->required(),
                        TextInput::make('Golda_a')->required(),
                        TextInput::make('Golda_b')->required(),
                        TextInput::make('Golda_ab')->required(),
                        TextInput::make('Golda_o')->required(),
                        DateTimePicker::make('Tgl_Update')->required()
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
            TextColumn::make('KabKota')->label('Kab/Kota')->sortable()->searchable(),
            TextColumn::make('Golda_a')->sortable()->searchable(),
            TextColumn::make('Golda_b')->sortable()->searchable(),
            TextColumn::make('Golda_ab')->sortable()->searchable(),
            TextColumn::make('Golda_o')->sortable()->searchable(),
            TextColumn::make('Tgl_Update')
            ->label('Tanggal Update')
            ->dateTime('d/m/Y H:i:s')
            ->sortable(),
    
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListStockDarahs::route('/'),
            'create' => Pages\CreateStockDarah::route('/create'),
            'edit' => Pages\EditStockDarah::route('/{record}/edit'),
        ];
    }
}
