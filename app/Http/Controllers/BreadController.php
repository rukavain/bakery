<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreadController extends Controller
{
    public function index()
    {
        return view('mainpage');
    }
}
