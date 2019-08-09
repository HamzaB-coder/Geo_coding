<?php

namespace App\Http\Controllers;

use Geocoder\Laravel\ProviderAndDumperAggregator as Geocoder;

class GeocoderController extends Controller
{
    public function getGeocode(Geocoder $geocoder)
    {
      dd($geocoder->geocode('8.8.8.8')->get());
    }
}
