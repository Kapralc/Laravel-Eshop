<?php

namespace App\Filament\Resources\PaymentsResource\Pages;

use App\Filament\Resources\PaymentsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPayments extends ListRecords
{
    protected static string $resource = PaymentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Přidat platbu')  // Změní text na tlačítku
                ->icon('heroicon-o-plus') // Přidá ikonu
                ->color('primary'),       // Změní barvu tlačítka na primární
        ];
    }
}