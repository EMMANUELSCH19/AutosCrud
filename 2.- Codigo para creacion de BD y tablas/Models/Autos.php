<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'Marca',
        'Modelo',
        'Año'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
