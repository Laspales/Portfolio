<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projects extends Controller
{
    public function show()
    {
        return view('projects');
    }
}
