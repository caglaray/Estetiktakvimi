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
			
			$hours=date('08:00');

			for ($i=0; $i <25 ; $i++) {
				DB::table('appointmentdays')->insert(['hours' => $hours ]); 
		


				$halfnext = strtotime($hours) + 30*60;

				$hours = date('H:i', $halfnext);
			}


		}
		return view('docadmin.randevuolustur');

	}
}


