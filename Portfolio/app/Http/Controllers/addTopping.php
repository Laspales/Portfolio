<?php

namespace App\Http\Controllers;

use App\Models\Topping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class addTopping extends Controller
{
    public function show()
    {
        if (!Gate::allows('admin', auth()->user())) {
            return redirect('main');
        }

        return view('admin/addtopping');
    }

    public function store(Request $request) {
        if (!Gate::allows('admin', auth()->user())) {
            return redirect('main');
        }
        $topping = new Topping;
        $topping->topping = $request->input('toppingName');
        $topping->price = $request->input('toppingPrice');

        $topping -> save();

        return redirect('/addTopping')->with('success', 'topping added successfully!');
    }
}