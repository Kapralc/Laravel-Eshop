<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // Určujeme název tabulky, pokud by byl jiný než "reviews"
    protected $table = 'reviews';

    // Pokud máš sloupce, které lze při masovém přiřazení (mass assignment) nastavovat
    protected $fillable = [
        'author',
        'content',
        'rating',
    ];

    // Určení, že tato tabulka má timestampy (created_at, updated_at)
    public $timestamps = true;

    // Pokud používáš vlastní primární klíč, můžeš nastavit 'primaryKey'
    // public $primaryKey = 'custom_id'; // Pokud nemáš 'id' jako primární klíč

    // Pokud používáš vlastní formát pro datumy (datetime), můžeš upravit:
    // protected $dates = ['created_at', 'updated_at']; // Pokud chceš, aby datumy byly konvertovány na Carbon instance.
    
    // Případně přidáme metodu pro zajištění správného pořadí
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
