<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;



class AppointmentController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth:doctor');
	}
	public function DoktorRandevu()
	{

		return view('docadmin.randevu');
	}
	public function DoktorRandevuOlustur(request $request)
	{
		switch($request->randevu) {

			case 'olustur':
			$today = date("Y-m-d");
			$hours=date('08:00');

			for ($i=0; $i <8 ; $i++) {
				DB::table('appointmentdays')->insert(['dayname' => $today ]);
				$today++;
			}
			

		}
		return view('docadmin.randevuolustur');

	}
}
