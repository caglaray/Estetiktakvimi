<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CorporationModel;

class CorporationController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}
	public function kurumliste()       
	{
        $corporation = CorporationModel::all();
        return view('admin.kurum.liste' , compact('corporation'));
    }
	public function KurumEkle()       
	{
		return view("admin.kurum.ekle");
	}
	public function store(Request $request)
	{

		$Corporation = new CorporationModel(array(

			'name' => $request->get('name'),
			'password' =>bcrypt($request->get('password')) ,
			'about'=>$request->get('about'),
			'username' => $request->get('username'),
			'email' => $request->get('email'),
			'logo' => $request->get('logo'),
			'city' => $request->get('city'),
			'telephone' => $request->get('telephone'),
			'adress' => $request->get('adress'),
			
			

			));

		$Corporation->save();

		return redirect('admin/kurum/liste')->with('status', 'Kayıt Başarıyla Eklenmiştir.');    

	}
	
    
}
