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
$appointmentdays =DB::table('appointmentdays')->get();
		return view('docadmin.randevu',compact('appointmentdays'));
	}
	public function DoktorRandevuOlustur(request $request)
	{
		$Doctorid = Auth::user()->id ;
		switch($request->randevu) {

			case 'olustur':

			$today = date("Y-m-d");

			$hours=date('08:00');

		
				for ($a=0; $a <8 ; $a++) {
					$hours=date('08:00');

					for ($b=0; $b <24 ; $b++) { 
						$appointment=DB::table('appointmentdays')->insert(
							['dayname' => $today ,
							'hours' => $hours,
							'doctorid'=>$Doctorid ]
							);


						$halfnext = strtotime($hours) + 30*60;

						$hours = date('H:i', $halfnext);
					} 

					$today++;}
				
			

					break;

			}
			$appointmentdays =DB::table('appointmentdays')->get();
			return redirect()->action('Doctor\AppointmentController@DoktorRandevu');

		}
	}


