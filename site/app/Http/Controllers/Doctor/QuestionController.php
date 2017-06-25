<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\QuestionModel;


class QuestionController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:doctor');
	}

	public function questionlist()
	{
		$doctorid = Auth::user()->id;

		$questions = QuestionModel::all()->where('doctorid',$doctorid);;

		return view('docadmin.sorucevap.sorular',compact('questions'));

	}


	public function questiondetail($id)
	{

		$questions = QuestionModel::whereid($id)->firstorFail();

		return view('docadmin.sorucevap.cevap',compact('questions'));


	}


	public function questionanswersend($id)
	{




	}





}
