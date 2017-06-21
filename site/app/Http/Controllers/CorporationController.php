<?php

namespace App\Http\Controllers;
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
public function doktorprofil()   

{
    $services = DB::table('services')->get();
    $userid = Auth::user()->id ;
    $doctors = DB::table('corp_doc')
    ->join('doctors', 'corp_doc.docid', '=', 'doctors.id')
    ->join('doc_schools', 'doctorid', '=', 'doctors.id')
    ->select('doctors.*','doc_schools.*')
    ->where('corp_doc.corpid',$userid)->get();
    
    
    $categories = DB::table('categories')->get();
   // $schools = DB::table('doc_schools')
    //->where('doctorid','2')->get();
  

   // ->where('doctorid',$doctors->id)->get();
//'2' $değişken olarak yukardaki sorgudan gelmesi gerek
    $schools = DB::table('doc_schools')->get();

    

    return view("corpadmin.doctorprofile", compact('doctors') )->with('doctors.id');

}

}
 //$userid = Auth::user()->id ;
     //   $doctors = DB::table('corp_doc')
   //     ->join('doctors', 'corp_doc.docid', '=', 'doctors.id')->select('doctors.*')->where('corp_doc.corpid',$userid)->get();

       // return view('corpadmin.doktor.liste' , compact('doctors'));