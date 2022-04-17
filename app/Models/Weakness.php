<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weakness extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'weakness',
    ];

    public function pokemons()
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
