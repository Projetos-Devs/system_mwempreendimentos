<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.index');
    }

    public function create(Request $request)
    {
        return view('admin.create');
    }
}
