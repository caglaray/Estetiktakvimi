<?php

namespace App\Http\Controllers\Doctor;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{


  public function __construct()
  {
    $this->middleware('auth:doctor');
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

    $experiences = DB::table('exp_doc')->where('doctorid',$userid)->get();

    $awards = DB::table('awards_doc')->where('doctorid',$userid)->get();

    $broads = DB::table('broad_doc')->where('doctorid',$userid)->get();

    $certificates = DB::table('certificate')->where('doctorid',$userid)->get();

    $images = DB::table('doc_images')->where('doctorid',$userid)->get();


    return view("docadmin.profile", compact('doctors','services','doctorservices','categories','doctorcategories','schools','experiences','awards','broads','certificates','images') );


  }


  public function profileupdate(request $request)
  {
    $userid = Auth::user()->id ;
    switch($request->kaydet) {

      case 'hakkmizdaekle':
      DB::table('doctors')->whereid($userid)->update(
        ['about' => $request->get('about')]
      );
      break;

      case 'hizmetekle':
      break;
    }

    return redirect()->action('Doctor\ProfileController@profilepage');


  }

}
