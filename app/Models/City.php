<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';

    public $timestamps = false;

    // Relación, una ciudad pertenece a un país
    public function country()
    {
        return $this->belongsTo(Country::class, 'CountryCode', 'Code');
    }
}