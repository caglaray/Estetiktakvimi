<?php

namespace App\Http\Controllers\Kurum;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ArticleModel;
use App\Http\Requests\ArticleEkleRequestForm;


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



	public function store(Request $request)
	{
		$userid = Auth::user()->id ;
		$Article = new ArticleModel(array(

			'title' => $request->get('title'),
			'content' => $request->get('content'),

			'corporationsid' => $userid  ,
			'image' =>$request->get('resim'),

			));

		$Article->save();


		return redirect('kurum/makale/')->with('status' , $Article->title.' isimli Makale Eklendi.');    

	}


	public function show($id)
	{
		$Article = ArticleModel::whereid($id)->firstorFail();
		return view('corpadmin.makale.makale-detay',compact('Article'));
	}


	public function edit($Makaleid)
	{
		$Article = ArticleModel::whereid($Makaleid)->firstorFail();
		return view('corpadmin.makale.makale-guncelle', compact('Article'));
	}


	public function update($Makaleid , ArticleEkleRequestForm $request)
	{

		$userid = Auth::user()->id ;
		$Article = ArticleModel::whereid("$Makaleid")->firstorFail();

		$Article->title      = $request->get('title');
		$Article->content   = $request->get('content');
		$Article->corporationsid   =  $userid ;
		$Article->status   = "0";
		$Article->image   = $request->get('resim');



		$Article->save();

		return redirect('kurum/makale/')->with('status' , $Article->title.' isimli Makale Güncellendi.');

	}


	public function silinecek($Makaleid)
	{

		$Article = ArticleModel::whereid($Makaleid)->firstorFail();
		return view('corpadmin.makale.makale-sil', compact('Article'));

	}


	public function destroy($Makaleid)
	{
		$Article = ArticleModel::whereid($Makaleid)->firstorFail();
		$Article->delete();
		return redirect('kurum/makale')->with('status' , $Article->title.' isimli Makale Silindi.');
	}

}
