<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class countryController extends Controller
{
    public function show(Request $request)
    {
        return view('show',['countries'=> countries::all()]);
    }
}
