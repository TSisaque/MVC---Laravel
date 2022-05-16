<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Vikings',
            'Wanda',
            'The Last'
        ];


        return view ('series.index', 
        compact('series') );
    }
}
