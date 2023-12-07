<?php

namespace App\Http\Controllers;

use App\Models\Taste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class addTaste extends Controller
{
    public function show()
    {
        if (!Gate::allows('admin', auth()->user())) {
            return redirect('main');
        }

        return view('admin/addTaste');
    }

    public function store(Request $request)
    {
        if (!Gate::allows('admin', auth()->user())) {
            return redirect('main');
        }
        $request->validate([
            'tasteName' => 'required',
            'tastePrice' => 'required|numeric',
            'tasteImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $imageName = $request->file('tasteImage');
        $imagePath = $imageName->store('images/tastes', 'public');

        $taste = new Taste;
        $taste->taste = $request->input('tasteName');
        $taste->price = $request->input('tastePrice');
        $taste->image = $imagePath; // Save the desired image path

        $taste->save();


        return redirect('/addTaste')->with('success', 'Taste added successfully!');
    }
}
