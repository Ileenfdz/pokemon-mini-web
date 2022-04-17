<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = "pokemons";

    protected $fillable = [
        'name',
        'number',
        'description',
        'legendary',
    ];

    public function poke_locations()
    {
        return $this->belongsToMany(PokeLocation::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function weaknesses()
    {
        return $this->belongsToMany(Weakness::class);
    }

    public function abilities()
    {
        return $this->belongsToMany(Ability::class);
    }

    public function movements()
    {
        return $this->belongsToMany(Movement::class);
    }
}
