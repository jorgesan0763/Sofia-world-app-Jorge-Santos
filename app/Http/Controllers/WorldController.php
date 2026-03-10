<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class WorldController extends Controller
{
    /**
     *Pantalla principal de listado de países
     */
    public function index()
    {
        $countries = Country::orderBy('Name')->get();
        return view('world', compact('countries'));
    }

    /**
     * Retorna las ciudades en orden descendente de población (top 10)
     * y las de menor población en orden ascendente.
     */
    public function getCities($countryCode)
    {
        $country = Country::find($countryCode);

        // Top 10 ciudades con mayor población
        $topCities = $country->cities()
            ->orderBy('Population', 'desc')
            ->take(10)
            ->get();

        // Top 10 ciudades con menor población
        $bottomCities = $country->cities()
            ->orderBy('Population', 'asc')
            ->take(10)
            ->get();

        return response()->json([
            'country' => $country->Name,
            'topCities' => $topCities,
            'bottomCities' => $bottomCities
        ]);
    }
}