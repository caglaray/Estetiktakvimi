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

	



}
