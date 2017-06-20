<?php

namespace App\Http\Controllers\Kurum;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ArticleModel;

class ArticleController extends Controller

{
	
	public function __construct()
	{
		$this->middleware('auth:corporation');
	}
	


	public function makaleekle()        
	{
		return view("corpadmin.makale.makale-ekle");   
	}


    public function makaleler()
    {
        $userid = Auth::user()->id ;

        $articles = articlemodel::all()->where('corporationsid',$userid);
        return view('corpadmin.makale.makale-liste' , compact('articles'));
    }



}
