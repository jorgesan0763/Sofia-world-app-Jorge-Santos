<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    // Primary key
    protected $primaryKey = 'Code';

    // Primary key (String)
    protected $keyType = 'string';

    public $timestamps = false;

    // Relación, un país tiene muchas ciudades
    public function cities()
    {
        return $this->hasMany(City::class, 'CountryCode', 'Code');
    }
}