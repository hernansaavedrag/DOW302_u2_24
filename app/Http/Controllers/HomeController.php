<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct() { //esto hace que cuando se incie sesion sea una sola sesion.
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home.index');
    }

    public function login()
    {
        return view('home.login');
    }
}
