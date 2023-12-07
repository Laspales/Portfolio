<?php

namespace App\Http\Controllers;

use App\Models\Taste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class editTaste extends Controller
{
    public function show($id)
    {
        // Check if the user has admin access
        if (!Gate::allows('admin', auth()->user())) {
            return redirect('main');
        }

        // Retrieve the taste record by ID
        $taste = Taste::find($id);

        // Pass the retrieved data to the view
        return view('admin/editTaste', ['taste' => $taste]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data as needed

        // Find the taste record by ID
        $taste = Taste::find($id);

        // Update the taste record with the new data
        // $taste->taste = $request->input('newTaste');
        // $taste->price = $request->input('newPrice');

        $imageName = $request->file('tasteImage');
        // dd($imageName);
        $imagePath = $imageName->store('images/tastes', 'public');
        // $taste->image = $imagePath; // Save the desired image path


        
        if ($taste->taste === null || $taste->price === null || $taste->image === null) {
            return redirect('editTaste')->with('error', 'Please provide values for all fields');
        }
        // Save the 
        $taste->update(['image' => $imagePath, 'taste' => $request->input('newTaste'), 'price' => $request->input('newPrice')]);
        // $taste->save();

        // Redirect back with a success message
        return redirect('/editTaste')->with('success', 'Taste updated successfully!');
    }
}
