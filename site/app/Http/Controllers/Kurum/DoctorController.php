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


    public function DoktorEkle()
    {
        return view("corpadmin.doktor.ekle");
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

      return view("corpadmin.doktor.detay", compact('doctors','services','doctorservices','categories','doctorcategories','schools'));

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


public function show($Kisi)
{
    $Doctor = DoctorModel::whereid($Kisi)->firstorFail();
    return view('corpadmin.doktor.detay',compact('Doctor'));
}

public function edit($Kisi)
{
    $Doctor = DoctorModel::whereid($Kisi)->firstorFail();
    return view('corpadmin.doktor.guncelle', compact('Doctor'));
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

      break;


      case 'deneyimekle':

      break;


      case 'yayinekle':

      break;


      case 'odulekle':

      break;


      case 'sertifikaekle':


      break;


      case 'resimekle':

      break;


      case 'hizmetekle':

      break;

      case 'kategoriekle':

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
