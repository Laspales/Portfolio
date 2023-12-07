<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taste;
use App\Models\User;
use App\Models\Topping;

class TasteController extends Controller
{
    public function show()
    {
        return view('products', [
            'tastes' => Taste::all(),
        ]);
    }

    public function get($id)
    {
        return view('product', [
            'taste' => Taste::findOrFail($id),
            'toppings' => Topping::all(),
        ]);
    }
}
