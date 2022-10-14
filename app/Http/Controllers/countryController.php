<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countries;

class countryController extends Controller
{
    public function showCountry(Country $countries)
    {
        // return view('register',['countries'=> Countries::all()])->request();
       // return $countries = Countries::all());
       return view ('/auth.register', ['countries'=> Country::all()]);
    }
}
