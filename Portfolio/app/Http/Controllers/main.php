<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
    public function show(Request $request)
    {
        return view('main');
    }
}