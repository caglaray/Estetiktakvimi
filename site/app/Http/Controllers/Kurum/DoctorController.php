<?php

namespace App\Http\Controllers\Kurum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\DoctorModel;
use App\Http\Requests\DoctorEkleRequestForm;
use Illuminate\Support\Facades\Input;

class DoctorController extends Controller
{


  public function __construct()
  {
    $this->middleware('auth:corporation');


  }
  public function DoktorRandevu()
  {
    return view('corpadmin.doktor.randevu');
  }


  public function DoktorEkle()
  {
   $userid = Auth::user()->id ;
   $adding=DB::table('corp_doc')
   ->where([
    ['corpid', '=', $userid]

    ])
   ->count();
   return view("corpadmin.doktor.ekle", compact('adding'));
 }
 public function doktorprofil($DoktorID)
 {


  $userid = Auth::user()->id ;
  $doctors = DB::table('doctors')->where('id',$DoktorID)->get();
  $schools = DB::table('doc_schools')->where('doctorid',$DoktorID)->get();
  $degree = DB::table('doc_degree')->get();


  $services = DB::table('services')->get();

  $doctorservices = DB::table('service_doc')
  ->join('services', 'service_doc.servicesid', '=', 'services.id')
  ->where('doctorid' , $DoktorID)
  ->get();
  $degrees = DB::table('doc_degree')-> get();


  $doctorexperience= DB::table('exp_doc')->where('doctorid',$DoktorID)->get();
  $doctorcertificate= DB::table('certificate')->where('doctorid',$DoktorID)->get();
  $doctorimages= DB::table('doc_images')->where('doctorid',$DoktorID)->get();
  $doctorbroads= DB::table('broad_doc')->where('doctorid',$DoktorID)->get();
  $doctorawards= DB::table('awards_doc')->where('doctorid',$DoktorID)->get();

  $categories = DB::table('categories')->get();

  $doctorcategories = DB::table('doc_cat')
  ->join('categories', 'doc_cat.cat_id', '=', 'categories.id')
  ->where('doctorid' , $DoktorID)
  ->get();

  return view("corpadmin.doktor.detay", compact('degree','degrees','doctorcertificate','doctorimages','doctorawards','doctors','services','doctorservices','categories','doctorcategories','schools','doctorexperience','doctorbroads'));

}
public function DoktorListe()
{
  $userid = Auth::user()->id ;
  $doctors = DB::table('corp_doc')
  ->join('doctors', 'corp_doc.docid', '=', 'doctors.id')
  ->select('doctors.*')
  ->where('corp_doc.corpid',$userid)
  ->get();

  return view('corpadmin.doktor.liste' , compact('doctors'));
}


public function DoktorDetay()
{
  return view('corpadmin.doktor.detay');
}

public function store(DoctorEkleRequestForm $request)
{

  $Doctor = new DoctorModel(array(

    'name' => $request->get('name'),
    'surname' => $request->get('surname'),
    'username' => $request->get('username'),
    'password' => $request->get('password'),
    'email' => $request->get('email'),
    'adress' => $request->get('adress'),
    'image' => $request->get('image'),
    'telephone' => $request->get('telephone'),
    'birthday' => $request->get('birthday'),
    'livecity' => $request->get('livecity'),

    ));

  $Doctor->save();

  $kurumid = Auth::user()->id ;

  $Lastid = $Doctor->id;






        //$Doctor-save() Başarılıysa doktor/liste, Başarısız ise doktor/ekle sayfasına gönderdim
  if ( $Doctor->save()==1) {

   DB::table('corp_doc')->insert(
    ['docid' => $Lastid , 'corpid' => $kurumid]
    );


   return redirect('kurum/doktor/liste')->with('status', 'Kayıt Eklendi.');
 }
 else
  return redirect('kurum/doktor/ekle');
}




public function update(request $request , $DoktorID)

{

  switch($request->kaydet) {

    case 'hakkindaekle':
    DB::table('doctors')->whereid( $DoktorID )->update(
      ['about' => $request->get('about')]
      );

    return redirect()->action('Kurum\DoctorController@doktorprofil', ['DoktorID' => $DoktorID]);

    break;


    case 'egitimekle':
    DB::table('doc_schools')->whereid( $DoktorID )->insert(
      [
      'doctorid' => $DoktorID ,
      'name' => $request->get('name'),
      'education'=> $request->get('education'),
      'start'=>$request->get('start'),
      'finish'=>$request->get('finish'),
      ]
      );
    return redirect()->action('Kurum\DoctorController@doktorprofil', ['DoktorID' => $DoktorID]);
    break;


    case 'deneyimekle':
    DB::table('exp_doc')->whereid( $DoktorID )->insert(
      [
      'doctorid' => $DoktorID ,
      'company_name' => $request->get('company_name'),      
      'start'=>$request->get('start'),
      'finish'=>$request->get('finish'),
      ]
      );
    return redirect()->action('Kurum\DoctorController@doktorprofil', ['DoktorID' => $DoktorID]);
    break;


    case 'yayinekle':
    DB::table('broad_doc')->whereid( $DoktorID )->insert(
      [
      'doctorid' => $DoktorID ,
      'broad_name' => $request->get('broad_name'),      
      'start'=>$request->get('start'),
      
      ]
      );
    return redirect()->action('Kurum\DoctorController@doktorprofil', ['DoktorID' => $DoktorID]);
    break;


    case 'odulekle':
    DB::table('awards_doc')->whereid( $DoktorID )->insert(
      [
      'doctorid' => $DoktorID ,
      'awards_name' => $request->get('awards_name'),      
      'start'=>$request->get('start'),
      
      ]
      );
    return redirect()->action('Kurum\DoctorController@doktorprofil', ['DoktorID' => $DoktorID]);
    break;


    case 'sertifikaekle':
    $file = Input::file('image');
    $file->move('images/Corporations/Doctors/Certificate' , $DoktorID.$file->getClientOriginalName());
    DB::table('certificate')->insert(
      [
      'doctorid' => $DoktorID,
      'image' => $DoktorID.$file->getClientOriginalName()

      ]
      );

    return redirect()->action('Kurum\DoctorController@doktorprofil', ['DoktorID' => $DoktorID]);
    break;


    case 'resimekle':
    $file = Input::file('image');
    $file->move('images/Corporations/Doctors/Img' , $DoktorID.$file->getClientOriginalName());
    DB::table('doc_images')->insert(
      [
      'doctorid' => $DoktorID,
      'images' => $DoktorID.$file->getClientOriginalName()

      ]
      );

    return redirect()->action('Kurum\DoctorController@doktorprofil', ['DoktorID' => $DoktorID]);
    break;


    case 'hizmetekle':

    $hizmet=$request->get('hizmet');

    $control=DB::table('service_doc')
    ->where([
      ['doctorid', '=', $DoktorID],
      ['servicesid', '=', $hizmet],
      ])
    ->count();




    if ($control == 0) {
      DB::table('service_doc')->whereid($DoktorID)->insert(
        ['doctorid' => $DoktorID , 'servicesid' =>$hizmet ]
        );
    }
    return redirect()->action('Kurum\DoctorController@doktorprofil', ['DoktorID' => $DoktorID]);
    break;

    case 'kategoriekle':

    $kategori=$request->get('kategori');

    $control=DB::table('doc_cat')
    ->where([
      ['doctorid', '=', $DoktorID],
      ['cat_id', '=', $kategori],
      ])
    ->count();




    if ($control == 0) {
      DB::table('doc_cat')->whereid($DoktorID)->insert(
        ['doctorid' => $DoktorID , 'cat_id' =>$kategori ]
        );
    }
    
    return redirect()->action('Kurum\DoctorController@doktorprofil', ['DoktorID' => $DoktorID]);
    break;

    case 'doktorhesap':
    DB::table('doctors') ->where([
      ['id', '=', $DoktorID]])->update(
      [
      
      'name' => $request->get('name'),      
      'surname' => $request->get('surname'),
      'docdegrees' => $request->get('docdegrees'),
      'livecity' => $request->get('livecity'),
      'birthday' => $request->get('birthday'),
      'adress' => $request->get('adress'),
      'telephone' => $request->get('telephone'),
     // if (isset('image' => $request->get('image'))) {
      'image' => $request->get('image'),
     //  $file = Input::file('image');
     //  $file->move('images/Corporations/Doctors/Profile/' , $DoktorID.$file->getClientOriginalName());
    // }

      ]
      );
      return redirect()->action('Kurum\DoctorController@doktorprofil', ['DoktorID' => $DoktorID]);
      break;

    }

  }

  public function silinecek($Kisi)
  {
    $Doctor = DoctorModel::whereid($Kisi)->firstorFail();
    return view('corpadmin.doktor.sil', compact('Doctor'));
  }

  public function destroy($Kisi)
  {
    $Doctor = DoctorModel::whereid($Kisi)->firstorFail();
    $Doctor->delete();
    return redirect('kurum/doktor/liste')->with('status' , $Doctor->name.' isimli Doktor Silindi.');
  }
}
