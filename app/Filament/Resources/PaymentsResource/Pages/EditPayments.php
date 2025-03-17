<?php

namespace App\Filament\Resources\PaymentsResource\Pages;

use App\Filament\Resources\PaymentsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPayments extends EditRecord
{
    protected static string $resource = PaymentsResource::class;

    // Přidání akce pro smazání - Filament už má tuto akci automaticky, ale můžete ji přidat pro vlastní přizpůsobení
    protected function getHeaderActions(): array
    {
        return [
            // Delete action je běžně dostupná v editovacím formuláři, ale můžete ji přizpůsobit podle potřeby
            Actions\DeleteAction::make()
                ->label('Smazat platbu') // Volitelně můžete změnit popis tlačítka
                ->color('danger') // Volitelně můžete změnit barvu
        ];
    }
}
