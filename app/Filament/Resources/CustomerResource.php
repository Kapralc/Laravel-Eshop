<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\NumberInput;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Pole pro název
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required() // Povinné pole
                    ->maxLength(255),

                // Pole pro email
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email() // Ujistíme se, že to je platný email
                    ->maxLength(255),

                // Pole pro adresu (může být text)
                Forms\Components\TextArea::make('address')
                    ->label('Address')
                    ->nullable() // Může být prázdné
                    ->maxLength(500),

                // Pole pro telefonní číslo
                Forms\Components\TextInput::make('phoneNumber')
                    ->label('Phone Number')
                    ->nullable() // Může být prázdné
                    ->maxLength(20),

                    Forms\Components\Select::make('discount')
                    ->label('Discount')
                    ->options([
                        5 => '5%',
                        10 => '10%',
                        15 => '15%',
                        20 => '20%',
                    ])
                    ->default(0), // Výchozí hodnota

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Zobrazení sloupců v tabulce
                Tables\Columns\TextColumn::make('name')->label('Name')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
                Tables\Columns\TextColumn::make('phoneNumber')->label('Phone Number'),
                Tables\Columns\TextColumn::make('discount')->label('Discount'),
            ])
            ->filters([
                // Filtry pro tabulku (pokud nějaké potřebuješ)
            ])
            ->actions([
                // Akce pro jednotlivé záznamy
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Hromadné akce (například smazání)
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Zde můžeš přidat vztahy, pokud je máš
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}