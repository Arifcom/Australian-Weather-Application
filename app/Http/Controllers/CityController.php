<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $data['query'] = \App\City::get();
        return view('home', ['data' => $data]);
    }
    
    public function show(Request $request)
    {
        $data['query'] = \App\City::where('id', '=', $request->id)->get();
        return view('detail', ['data' => $data]);
    }
}
