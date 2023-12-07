<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class editUser extends Controller
{
    public function show()
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $user = auth()->user();

        return view('editUser', ['user' => $user]);
    }

    public function update(Request $request, $id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect('editUser')->with('popup', 'User not found');
    }

    $newFirstName = $request->input('newFirstName');
    $newLastName = $request->input('newLastName');
    $newEmail = $request->input('newEmail');

    // Check if any of the input values is null
    if ($newFirstName === null || $newLastName === null || $newEmail === null) {
        return redirect('editUser')->with('popup', 'Please provide values for all fields');
    }

    // Update user profile
    $user->firstname = $newFirstName;
    $user->lastname = $newLastName;
    $user->email = $newEmail;

    $user->save();

    return redirect('editUser')->with('popup', 'Your profile has been updated!');
}

}
