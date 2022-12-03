<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.login.index');
    }

    public function create(Request $request)
    {
        return view('admin.login.create');
    }
}
