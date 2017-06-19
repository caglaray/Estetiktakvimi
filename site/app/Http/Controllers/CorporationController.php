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
    public function about()        
	{
		return view("corpadmin.about");   
	}
     public function doktorekle()        
    {
        return view("corpadmin.doctoradd");   
    }
     public function doktorliste()        
    {
        return view("corpadmin.doctorlist");   
    }
    public function doktorprofil()        
    {
        return view("corpadmin.doctorprofile");   
    }
}
