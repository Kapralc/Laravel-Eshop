<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();  // Primární klíč 'id'
            $table->string('name');  // Sloupec pro jméno
            $table->string('email')->unique();  // Sloupec pro email (s unikátním omezením)
            $table->string('phone_number')->nullable();  // Sloupec pro telefonní číslo (volitelné)
            $table->decimal('discount', 5, 2)->nullable();  // Sloupec pro slevu, s maximální velikostí 5 a 2 desetinnými místy
            $table->timestamps();  // Sloupce 'created_at' a 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

