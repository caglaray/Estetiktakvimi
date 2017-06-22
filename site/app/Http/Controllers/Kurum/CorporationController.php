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
  public function doktorprofil($DoktorID)   
  {

    $userid = Auth::user()->id ;

    $doctors = DB::table('doctors')->where('id',$DoktorID)->get();

    $schools = DB::table('doc_schools')->where('doctorid',$DoktorID)->get();


    
    $services = DB::table('services')->get();
    $categories = DB::table('categories')->get();


    

    return view("corpadmin.doctorprofile", compact('doctors','services','categories','schools'));

  }

}