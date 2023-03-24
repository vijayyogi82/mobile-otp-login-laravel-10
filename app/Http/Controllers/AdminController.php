<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Admin,User};

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function create()
    {
        return view('admin.create-admin');
    }

    public function Store()
    {
        return redirect()->back()->with('message', 'Admin Add Successfully!');
    }

    public function edit()
    {
        return view('admin.edit-admin');
    }

    public function update()
    {
        return redirect()->back()->with('message', 'Admin Update Successfully!');
    }
    
}
