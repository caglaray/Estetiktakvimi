<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ArticleModel;
use App\Http\Requests\ArticleEkleRequestForm;

class ArticleController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:doctor');
    }

    public function index()
    {
        //
    }



    public function makaleliste()
    {
        $userid = Auth::user()->id ;

        $articles = articlemodel::all()->where('doctorid',$userid);
        return view('docadmin.makale.makale-liste' , compact('articles'));
    }


    public function makaleekle()     
    {
        return view("docadmin.makale.makale-ekle");  

    }



    public function store(Request $request)
    {
        $userid = Auth::user()->id ;
        $Article = new ArticleModel(array(

            'title' => $request->get('title'),
            'content' => $request->get('content'),
            
            'doctorid' => $userid  ,
            'image' =>$request->get('resim'),

            ));

        $Article->save();


        return redirect('doktor/makale/')->with('status' , $Article->title.' isimli Makale Eklendi.');    

    }


    public function show($id)
    {
        $Article = ArticleModel::whereid($id)->firstorFail();
        return view('docadmin.makale.makale-detay',compact('Article'));
    }


    public function edit($Makaleid)
    {
        $Article = ArticleModel::whereid($Makaleid)->firstorFail();
        return view('docadmin.makale.makale-guncelle', compact('Article'));
    }


    public function update($Makaleid , ArticleEkleRequestForm $request)
    {


        $Article = ArticleModel::whereid("$Makaleid")->firstorFail();
    $userid = Auth::user()->id ;
        $Article->title      = $request->get('title');
        $Article->content   = $request->get('content');
        $Article->doctorid   = $userid;
        $Article->status   = "0";
        $Article->image   = $request->get('resim');



        $Article->save();

        return redirect('doktor/makale/')->with('status' , $Article->title.' isimli Makale Güncellendi.');

    }


    public function silinecek($Makaleid)
    {

        $Article = ArticleModel::whereid($Makaleid)->firstorFail();
        return view('docadmin.makale.makale-sil', compact('Article'));

    }


    public function destroy($Makaleid)
    {
       $Article = ArticleModel::whereid($Makaleid)->firstorFail();
       $Article->delete();
       return redirect('doktor/makale/')->with('status' , $Article->title.' isimli Makale Silindi.');
   }
}
