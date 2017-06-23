<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CorporationModel;
use Alert;



class CorporationController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}
	public function kurumliste()
	{

		$corporations = CorporationModel::all();
		return view('admin.kurum.liste' , compact('corporations'));       

	}

	public function KurumEkle()       
	{
		return view("admin.kurum.ekle");
	}
	public function store(Request $request)
	{

		$corporation = new CorporationModel(array(

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
	

	public function show($Kisi)
	{
		$corporation = CorporationModel::whereid($Kisi)->firstorFail();
		return view('admin.kurum.detay',compact('corporation'));
	}
	public function edit($Kisi)
	{
		$corporation = CorporationModel::whereid($Kisi)->firstorFail();
		return view('admin.kurum.guncelle', compact('corporation'));
	}

	public function silinecek($Kisi)
	{
		$corporation = CorporationModel::whereid($Kisi)->firstorFail();
		return view('admin.doktor.sil', compact('corporation'));
	}

	public function destroy($Kisi)
	{
		$corporation = CorporationModel::whereid($Kisi)->firstorFail();
		$corporation->delete();
		return redirect('kurum/liste')->with('status' , $corporation->name.' isimli Kurum Silindi.');
	}

}
