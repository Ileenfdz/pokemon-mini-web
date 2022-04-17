<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'number',
        'description',
        'legendary',
    ];

    public function locations()
    {
        return $this->belongsToMany(Locations::class);
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
}
