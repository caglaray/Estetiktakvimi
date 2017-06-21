<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




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

	public function deneyim()          
	{
		return view("docadmin.deneyim");   
	}

	public function profilepage()
	{

		$userid = Auth::user()->id ;

		$okullar = DB::table('doc_schools')->where('doctorid',$userid)->get();

		$services = DB::table('services')->get();
		$categories = DB::table('categories')->get();

		return view("docadmin.profile", compact('okullar' , 'services' ,'categories') );
	}

	


}
