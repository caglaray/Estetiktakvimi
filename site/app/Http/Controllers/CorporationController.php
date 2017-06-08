<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:corporation');
    }

  
    public function index()
    {
        return view('corpadmin.home');
    }
}
