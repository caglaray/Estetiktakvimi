<?php

namespace App\Http\Controllers\Kurum;
use Illuminate\Http\Request;
use App\CorporationModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


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





  public function about( Request $request)        
  {
   $userid = Auth::user()->id ;



   switch($request->kaydet) {

    case 'hakkmizdaekle': 

    DB::table('corporations')->whereid($userid)->update(
      ['about' => $request->get('about')]
      );

    break;

    case 'hizmetekle': 

    $hizmet=$request->get('hizmet');

    $control=DB::table('corp_ser')
    ->where([
      ['corpid', '=', $userid],
      ['servicesid', '=', $hizmet],
      ])
    ->count();




    if ($control == 0) {
      DB::table('corp_ser')->whereid($userid)->insert(
        ['corpid' => $userid , 'servicesid' =>$hizmet ]
        );
    }


    break;

    case 'hesapayarlari': 
    DB::table('corporations')->whereid($userid)->update(
      ['name' => $request->get('name'),'adress' => $request->get('adress'),'telephone' => $request->get('telephone')]
      );
    $file = Input::file('logo');
    $file->move('images/corporations/Logos' , $userid.$file->getClientOriginalName());
    DB::table('corporations')->whereid($userid)->update(['logo' => $userid.$file->getClientOriginalName()]);
    break;

    case 'kapat': 

    break;

  }

  $userid = Auth::user()->id ;
  $about = DB::table('corporations')->get();
  $corporationservices = DB::table('corp_ser')
  ->join('services', 'corp_ser.servicesid', '=', 'services.id')
  ->where('corpid' , $userid)
  ->get();
  $services = DB::table('services')->get();
  return view("corpadmin.about", compact('corporationservices','services','about'));   
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
public function silinecek($hizmetid)
{
  DB::table('corp_ser')->whereid($hizmetid)->delete(
    ['id' => $hizmetid ]);
  return view('corpadmin.about');

}

}