<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbaordController extends Controller
{
    function index()
    {
        return view('dashboard');
    }
}
