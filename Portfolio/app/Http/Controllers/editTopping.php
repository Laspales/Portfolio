<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topping;
use Illuminate\Support\Facades\Gate;

class editTopping extends Controller
{
    public function show($id)
    {
        // Check if the user has admin access
        if (!Gate::allows('admin', auth()->user())) {
            return redirect('main');
        }

        // Retrieve the topping record by ID
        $topping = Topping::find($id);

        // Pass the retrieved data to the view
        return view('admin/editTopping', ['topping' => $topping]);
    }

    public function update(Request $request, $id)
    {
        if (!Gate::allows('admin', auth()->user())) {
            return redirect('main');
        }
        // Validate the request data as needed

        // Find the topping record by ID
        $topping = Topping::find($id);

        // Update the topping record with the new data
        $topping->topping = $request->input('newTopping');
        $topping->price = $request->input('newPrice');

        if ($topping->topping === null || $topping->price === null) {
            return redirect('editTopping')->with('error', 'Please provide values for all fields');
        }

        // Save the changes
        $topping->save();

        // Redirect back with a success message
        return redirect('/editTopping')->with('success', 'topping updated successfully!');
    }
}
