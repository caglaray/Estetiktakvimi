<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;







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



	public function duyuruyap()
	{
		return view("docadmin.duyuru");
	}



}
