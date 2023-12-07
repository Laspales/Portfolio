<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{

    public function show()
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        return view('dashboard');
    }

}