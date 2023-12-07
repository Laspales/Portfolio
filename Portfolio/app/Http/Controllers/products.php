<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class products extends Controller
{
    public function show()
    {
        return view('products');
    }
}
