<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Carbon\Carbon;


class AppointmentController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth:doctor');
	}
	
/**
 * Verilen doktor id'ye göre randevu tablosunu HTML olarak dönderir.
 *
 * @param int $doctorid Doktor id
 * @param int $dayRange Başlama tarihinden itibaren kaç günlük randevunun listeleneceği
 * @param null|Carbon $startDate Listenin başlama tarihi. Belirtilmemişse bugün
 * @param null|Carbon $startTime Randevu başlama saati. Verilmemişse 08:00
 * @param null|Carbon $endTime Randevu bitiş saati. Verilmemişse 17:30
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
 */
public function renderAppointmentTableByDoctorId($doctorid, $dayRange = 7, $startDate = null, $startTime = null, $endTime = null)
{
	$hours = [
	['08:00', '09:00', '10:00', '10:30', '11:00', '13:00', '13:30', '15:00'],
	['10:00', '10:30', '11:00', '13:00', '13:30', '15:00', '15:30', '16:00'],
	['09:00', '10:00', '10:30', '11:00', '13:00', '13:30', '15:00', '17:00'],
	['10:00', '10:30', '11:00', '13:00', '13:30', '15:00', '15:30', '16:00'],
	['08:00', '09:00', '10:00', '10:30', '11:00', '13:00', '13:30', '15:00'],
	['13:30', '14:00', '14:30', '15:00'],
	['09:00', '10:00', '10:30', '11:00', '13:00', '13:30', '15:00', '17:00'],
	];
	$Doctorid = Auth::user()->id ;
	foreach ($hours as $i => $hour) {
		foreach ($hour as $h) {
			DB::table('appointmentdays')->insert([
				'dayname' => \Carbon\Carbon::now()->addDay($i),
				'hours' => $h,
				'doctorid' => $Doctorid 
				]);
		}
	}
	if (is_null($startTime)) {
		$startTime = Carbon::createFromTime(8, 0, 0);
	}

	if (is_null($endTime)) {
		$endTime = Carbon::createFromTime(17, 30, 0);
	}

	if (is_null($startDate)) {
		$startDate = Carbon::now();
	}

	/** @var array $hours Randevu saatleri */
	$hours = [];

	/** @var array $days Randevu günleri. Başlama tarihini direk dahil edelim. */
	$days = [
	$startDate->format('Y-m-d')
	];

    // 30 dakika ara ile saat dizisini oluşturuyoruz.
	for ($hour = $startTime; $hour->lte($endTime); $hour->addMinutes(30)) {
		$hours[] = $hour->format('H:i:s');
	}

    // Gün dizisini oluşturuyoruz. Başlama tarihi zaten dahil olduğu için addDay ile
    // sonraki günler eklenecek
	for ($i = 1; $i < $dayRange; $i++) {
		$days[] = $startDate->addDay()->format('Y-m-d');
	}

	/** @var \Illuminate\Support\Collection $appointments Doktora göre randevular */
	$appointments = DB::table('appointmentdays')->where('doctorid', $doctorid)->get();

	return view('docadmin.appointment-table', compact('days', 'hours', 'appointments'));
}

public function DoktorRandevuOnayla()
{
	$Doctorid = Auth::user()->id ;
	$appointmentdays =DB::table('appointmentdays')->where('doctorid',$Doctorid)->get();
	
	return view('docadmin.randevu',compact('appointmentdays','hourscount'));
}
}