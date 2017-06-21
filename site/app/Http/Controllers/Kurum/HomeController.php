<?php

namespace App\Http\Controllers\Corporation;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\ArticleModel;
use Illuminate\Http\Request;




class HomeController extends Controller
{


	public function __construct()
	{
		$this->middleware('auth:corporation');
	}

	public function doclist()
	{

		$userid = Auth::user()->id ;

		$doktorlar = DB::table('corp_doc')->where('corpid',$userid)->get();

		return view("corpadmin.doktor.liste", ['doc_id' => $doktorlar] );
	}

	



}
