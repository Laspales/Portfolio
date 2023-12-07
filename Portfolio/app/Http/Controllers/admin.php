<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class admin extends Controller
{
    public function show()
    {
        if (!Gate::allows('admin', auth()->user())) {
            return redirect('/');
        }

        return view('admin/admin');
    }

    public function addproducts()
    {
        return view('admin/addproducts');
    }

    public function editproducts()
    {
        return view('admin/editproducts');
    }
}