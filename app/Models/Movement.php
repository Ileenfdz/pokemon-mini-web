<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function pokemons()
    {
        return $this->belongsToMany(Pokemon::class);
    }

    public function movement_types()
    {
        return $this->belongsToMany(MovementType::class);
    }

    public function movement_classes()
    {
        return $this->belongsToMany(MovementClass::class);
    }
}
