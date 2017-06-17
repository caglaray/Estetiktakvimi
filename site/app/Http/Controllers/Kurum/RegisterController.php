<?php

namespace App\Http\Controllers\Kurum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CorporationModel;

class RegisterController extends Controller
{
	public function CorporationRegister(Request $request)
	{

		$Corporation = new CorporationModel(array(

			'username' => $request->get('username'),
			'password' =>bcrypt($request->get('password')) ,
			
			'email' => $request->get('email'),
			'name' => $request->get('name'),
			'city' => $request->get('city'),
			'telephone' => $request->get('telephone'),
			'adress' => $request->get('adress'),
			'logo' => $request->get('logo'),
			

			));

		$Corporation->save();

		return redirect('/kurum/register')->with('status', 'Yönetici Onayından Sonra Giriş http://estetik/kurum/register adresinden Yapabilirsiniz');    

	}
}
