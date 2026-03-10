<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // Tabla correspondiente en la BD
    protected $table = 'country';

    // Clave primaria de la tabla
    protected $primaryKey = 'Code';

    // La clave primaria es string, no entero
    protected $keyType = 'string';

    // La tabla no tiene created_at ni updated_at
    public $timestamps = false;

    // Relación: un país tiene muchas ciudades
    public function cities()
    {
        return $this->hasMany(City::class, 'CountryCode', 'Code');
    }
}