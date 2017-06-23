<?php

namespace App\Http\Controllers\Kurum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
    $userid = Auth::user()->id ;
    $corporationservices = DB::table('corp_ser')
    ->join('services', 'corp_ser.servicesid', '=', 'services.id')
    ->where('corpid' , $userid)
    ->get();
    $services = DB::table('services')->get();
    return view("corpadmin.about", compact('corporationservices','services'));   
  }



  public function doktorekle()        
  {
    return view("corpadmin.doctoradd");   
  }



  public function doktorprofil($DoktorID)   
  {

    $userid = Auth::user()->id ;
    $doctors = DB::table('doctors')->where('id',$DoktorID)->get();
    $schools = DB::table('doc_schools')->where('doctorid',$DoktorID)->get();

    
    $services = DB::table('services')->get();

    $doctorservices = DB::table('service_doc')
    ->join('services', 'service_doc.servicesid', '=', 'services.id')
    ->where('doctorid' , $DoktorID)
    ->get();




    $categories = DB::table('categories')->get();

    $doctorcategories = DB::table('doc_cat')
    ->join('categories', 'doc_cat.cat_id', '=', 'categories.id')
    ->where('doctorid' , $DoktorID)
    ->get();

    return view("corpadmin.doctorprofile", compact('doctors','services','doctorservices','categories','doctorcategories','schools'));

  }

}