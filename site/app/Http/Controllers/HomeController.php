<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:web');
    }

    public function index()
    {



        $articles = DB::table('article')
        ->join('doctors', 'article.doctorid', '=', 'doctors.id')
        ->select('article.id','article.title','article.status', 'doctors.name','doctors.surname')
        ->where('article.status' , '1')
        ->orderBy('id', 'desc')
        ->limit(5)
        ->get();

        $videos = DB::table('video')
        ->join('doctors', 'video.doctorid', '=', 'doctors.id')
        ->select('video.id','video.name as title','video.status', 'doctors.name','doctors.surname')
        ->where('video.status' , '1')
        ->orderBy('id', 'desc')
        ->limit(5)
        ->get();




        return view("site.home", compact('articles','videos') );



        
    }


    public function doktor()
    {
        return view('site.doktor');
    }

    public function liste()
    {
        return view('site.liste');
    }


    public function blog()
    {
        return view('site.blog');
    }
    
    public function kurumregister()
    {
        return view('site.kurumregister');
    }

    

}
