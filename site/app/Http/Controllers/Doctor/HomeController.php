<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth:doctor');
	}


	public function Doktorindex()        
	{
		return view("docadmin.home");   
	}

	public function soru()     
	{
		return view("docadmin.sorucevap.sorular");    
	}

	public function cevap()          
	{
		return view("docadmin.sorucevap.cevap");   
	}


	


}
