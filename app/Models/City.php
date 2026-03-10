<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    // Tabla correspondiente en la BD
    protected $table = 'city';

    // La tabla no tiene created_at ni updated_at
    public $timestamps = false;

    // Relación inversa: una ciudad pertenece a un país
    public function country()
    {
        return $this->belongsTo(Country::class, 'CountryCode', 'Code');
    }
}