<?php

namespace App\Http\Controllers\Doctor;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;



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
    $schools = DB::table('doc_schools')->where('doctorid',$userid)->orderBy('start')->get();
    $services = DB::table('services')->get();
    $categories = DB::table('categories')->get();

    $doclang =DB::table('doc_lang')->where('doctorid',$userid)->get();
    if (isset($doclang)) {
      $query =DB::table('doc_lang')->insert(['doctorid' => $userid,'name' => "Türkçe"]);
      $doclang =DB::table('doc_lang')->where('doctorid',$userid)->get();
    }



    $doctorservices = DB::table('service_doc')
    ->join('services', 'service_doc.servicesid', '=', 'services.id')
    ->where('doctorid' , $userid)
    ->get();
    $doctorcategories = DB::table('doc_cat')
    ->join('categories', 'doc_cat.cat_id', '=', 'categories.id')
    ->where('doctorid' , $userid)
    ->get();

    $experiences = DB::table('exp_doc')->where('doctorid',$userid)->orderBy('start')->get();

    $awards = DB::table('awards_doc')->where('doctorid',$userid)->orderBy('start')->get();

    $broads = DB::table('broad_doc')->where('doctorid',$userid)->orderBy('start')->get();

    $certificates = DB::table('certificate')->where('doctorid',$userid)->get();

    $images = DB::table('doc_images')->where('doctorid',$userid)->get();

    $imagecount = DB::table('doc_images')->where('doctorid',$userid)->count();




    return view("docadmin.profile", compact('doctors','services','doctorservices','categories','doctorcategories','schools','experiences','awards','broads','certificates','images','imagecount','languages','doclang') );


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


      case 'egitimekle':
      DB::table('doc_schools')->insert(
        [
          'doctorid' => $userid,
          'name' => $request->get('schoolname'),
          'education' => $request->get('schooltype'),
          'start'=>$request->get('schoolstart'),
          'finish' => $request->get('schoolfinish')
        ]
      );
      break;


      case 'deneyimekle':
      DB::table('exp_doc')->insert(
        [
          'doctorid' => $userid,
          'company_name' => $request->get('expname'),
          'start'=>$request->get('expstart'),
          'finish' => $request->get('expfinish')
        ]
      );
      break;


      case 'yayinekle':
      DB::table('broad_doc')->insert(
        [
          'doctorid' => $userid,
          'broad_name' => $request->get('expname'),
          'start'=>$request->get('expstart')
        ]
      );
      break;


      case 'odulekle':
      DB::table('awards_doc')->insert(
        [
          'doctorid' => $userid,
          'awards_name' => $request->get('odulname'),
          'start'=>$request->get('odulstart')
        ]
      );
      break;


      case 'sertifikaekle':

        $file = Input::file('sertifikaresim');
        $file->move('images/certificates' , $userid.$file->getClientOriginalName());
        DB::table('certificate')->insert(
          [
            'doctorid' => $userid,
            'image' => $userid.$file->getClientOriginalName()

          ]
        );
        break;


        case 'resimekle':
        $file = Input::file('doktorresim');
        $file->move('images/doctors/albums' , $userid.$file->getClientOriginalName());
        DB::table('doc_images')->insert(
          [
            'doctorid' => $userid,
            'images' => $userid.$file->getClientOriginalName()
          ]
        );
        break;


        case 'hizmetekle':
        $serviceid =$request->get('serlist');


        $control = DB::table('service_doc')
        ->where([
          ['doctorid', '=', $userid],
          ['servicesid', '=', $serviceid],
        ])
        ->count();

        if ($control == 0) {
          DB::table('service_doc')->insert(
            ['doctorid' => $userid , 'servicesid' =>$request->get('serlist') ]
          );
        }
        break;

        case 'kategoriekle':
        $catid =$request->get('catlist');


        $control = DB::table('doc_cat')
        ->where([
          ['doctorid', '=', $userid],
          ['cat_id', '=', $catid],
        ])
        ->count();

        if ($control == 0) {
          DB::table('doc_cat')->insert(
            ['doctorid' => $userid , 'cat_id' =>$request->get('catlist') ]
          );
        }
        break;

        case 'profilguncelle':
        $name=$request->get('accname');
        $surname=$request->get('accsurname');
        $address=$request->get('accaddress');
        $tel=$request->get('acctel');
        $lang= $request->get('acclang');
        $imgurl = Auth::user()->image;
        if (Input::hasFile('accprofilephoto')) {
          $file = Input::file('accprofilephoto');
          $file->move('images/doctors' , $userid.$file->getClientOriginalName());
          $imgurl =  $userid.$file->getClientOriginalName();
        }
        DB::table('doctors')
        ->where('id' , $userid)
        ->update([
          'name' => $name,
          'surname' => $surname,
          'adress' => $address,
          'telephone' => $tel,
          'image' => $imgurl
        ]);
        DB::table('doc_lang')->where('doctorid' , $userid)->update(['name' => $lang]);
        break;

        case 'kullaniciguncelle':

        $username = $request->get('kbusername');
        $password = $request->get('kbpassword');
        $username = $request->get('kbpasswordagain');

        $userid = Auth::user()->id ;
        $ausername = Auth::user()->username;

        if ($username == $ausername) {



         }

        break;
      }

      if ($request->egitimsil) {
        $id = $request->input('egitimsil');
        DB::table('doc_schools')->where('id',$id)->delete();
      }

      if ($request->deneyimsil) {
        $id = $request->input('deneyimsil');
        DB::table('exp_doc')->where('id',$id)->delete();
      }

      if ($request->yayinsil) {
        $id = $request->input('yayinsil');
        DB::table('broad_doc')->where('id',$id)->delete();
      }

      if ($request->odulsil) {
        $id = $request->input('odulsil');
        DB::table('awards_doc')->where('id',$id)->delete();
      }
      if ($request->sertifikasil) {
        $id = $request->input('sertifikasil');
        DB::table('certificate')->where('id',$id)->delete();
      }

      if ($request->resimsil) {
        $id = $request->input('resimsil');
        DB::table('doc_images')->where('id',$id)->delete();
      }

      if ($request->doktorhizmetsil) {
        $serviceid = $request->input('doktorhizmetsil');
        DB::table('service_doc')
        ->where([
          ['doctorid', '=', $userid],
          ['servicesid', '=', $serviceid],
        ])
        ->delete();
      }


      if ($request->doktorhizmetkategorisil) {
        $catid = $request->input('doktorhizmetkategorisil');
        DB::table('doc_cat')
        ->where([
          ['doctorid', '=', $userid],
          ['cat_id', '=', $catid],
        ])
        ->delete();
      }







      return redirect()->action('Doctor\ProfileController@profilepage');


    }




  }
