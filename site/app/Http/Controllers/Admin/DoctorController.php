<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\DoctorModel;
use App\Http\Requests\DoctorEkleRequestForm;



class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    public function DoktorEkle()         {
        return view("admin.doktor.ekle");
    }

    public function DoktorListe()
    {
        $doctors = DoctorModel::all();
        return view('admin.doktor.liste' , compact('doctors'));
    }


    public function DoktorDetay()
    {
        return view('admin.doktor.detay');
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
            'photourl' => $request->get('photourl'),
            'telephone' => $request->get('telephone'),
            'birthday' => $request->get('birthday'),
            'livecity' => $request->get('livecity'),

            ));

        $Doctor->save();

        return redirect('admin/doktor/liste')->with('status', 'Kayıt Eklendi.');    

    }


    public function show($Kisi)
    {
        $Doctor = DoctorModel::whereid($Kisi)->firstorFail();
        return view('admin.doktor.detay',compact('Doctor'));
    }
    
    public function edit($Kisi)
    {
        $Doctor = DoctorModel::whereid($Kisi)->firstorFail();
        return view('admin.doktor.guncelle', compact('Doctor'));
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
        return redirect(action('admin\DoctorController@DoktorListe',$Kisi))->with('status',$Doctor->username.' adlı Kullanıcının Kaydı Güncellendi.');


    }

    public function silinecek($Kisi)
    {
        $Doctor = DoctorModel::whereid($Kisi)->firstorFail();
        return view('admin.doktor.sil', compact('Doctor'));
    }

    public function destroy($Kisi)
    {
        $Doctor = DoctorModel::whereid($Kisi)->firstorFail();
        $Doctor->delete();
        return redirect('admin/doktor/liste')->with('status' , $Doctor->name.' isimli Doktor Silindi.');
    }
}
