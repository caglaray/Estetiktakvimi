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
		$doctors = DB::table('doctors')->where('id',$userid)->get();
		$schools = DB::table('doc_schools')->where('doctorid',$userid)->get();
		$services = DB::table('services')->get();
		$categories = DB::table('categories')->get();


		$doctorservices = DB::table('service_doc')
		->join('services', 'service_doc.servicesid', '=', 'services.id')
		->where('doctorid' , $userid)
		->get();

		$doctorcategories = DB::table('doc_cat')
		->join('categories', 'doc_cat.cat_id', '=', 'categories.id')
		->where('doctorid' , $userid)
		->get();



		return view("docadmin.profile", compact('doctors','services','doctorservices','categories','doctorcategories','schools') );


	}

	


}
