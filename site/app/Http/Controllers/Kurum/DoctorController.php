<?php

namespace App\Http\Controllers\Kurum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\DoctorModel;
use App\Http\Requests\DoctorEkleRequestForm;
use Alert;

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

public function update($Kisi , DoctorEkleRequestForm $request)
{

    $Doctor = DoctorModel::whereid($Kisi)->firstorFail();

    $Doctor->name      = $request->get('name');
    $Doctor->surname   = $request->get('surname');
    $Doctor->username  = $request->get('username');
    $Doctor->password  = $request->get('password');
    $Doctor->email     = $request->get('email');
    $Doctor->adress    = $request->get('adress');
    $Doctor->photourl  = $request->get('photourl');
    $Doctor->telephone = $request->get('telephone');
    $Doctor->birthday  = $request->get('birthday');
    $Doctor->birthday  = $request->get('birthday');
    $Doctor->livecity  = $request->get('livecity');

    $Doctor->save();
    return redirect(action('Kurum\DoctorController@DoktorListe',$Kisi))->with('status',$Doctor->username.' adlı Kullanıcının Kaydı Güncellendi.');


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
