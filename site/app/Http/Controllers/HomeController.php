<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:web');
    }

    public function index()
    {
        return view('site.home');
    }


    public function doktor()
    {
        return view('site.doktor');
    }

    public function liste()
    {
        return view('site.liste');
    }


    public function blog()
    {
        return view('site.blog');
    }
}
