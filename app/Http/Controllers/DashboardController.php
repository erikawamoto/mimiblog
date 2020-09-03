<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class HomeController extends Controller
class DashboardController extends Controller //
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // return view('home');
        return view('dashboard'); //
    }
}
