<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovementClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    public function movements()
    {
        return $this->belongsToMany(Movement::class);
    }
}
