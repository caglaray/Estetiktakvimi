<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoriesModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	public function index()
	{


		return view('admin.home');
	}

	public function kategori()
	
	{
		$categories = CategoriesModel::all();
		return view('admin.kategori.kategori' , compact('categories'));       

		
	}

//Admin Kategori Ekle Blade Tema Çağırılması
	public function kategoriekle()
	{

		return view('admin.kategori.kategoriekle')->with('status', 'Kayıt Başarıyla Eklenmiştir.');    

	}
//Admin Kategori Ekle Blade Temadan gelen Post Modelle Kayıt Oluşturması
	public function kategoristore(Request $request)
	{
		$categories = new CategoriesModel(array(

			'name' => $request->get('name'),
			'about'=>$request->get('about'),
			));

		$categories->save();

		return redirect('admin/kategori')->with('status', 'Kayıt Başarıyla Eklenmiştir.'); 

	}
	public function kategorishow($CategoriesID)
	{
		$Categories = CategoriesModel::whereid($CategoriesID)->firstorFail();
		return view('admin.kategori.kategoridetay' , compact('Categories'));   
	}
	public function kategoriduzenle($CategoriesID)
	{
		$Categories = CategoriesModel::whereid($CategoriesID)->firstorFail();
		return view('admin.kategori.kategoriguncelle' , compact('Categories'));   
	}
	public function kategoriupdate(request $request, $CategoriesID)
	{

		$Categories = CategoriesModel::whereid($CategoriesID)->firstorFail();

		$Categories->name      = $request->get('name');
		$Categories->about  = $request->get('about');

		$Categories->save();

		return redirect(action('Admin\HomeController@kategori',$CategoriesID))->with('status',$Categories->name.' adlı Kategori Güncellendi.');
	}
	

	public function kategorisil($CategoriesID)
	{

		$Categories = CategoriesModel::whereid($CategoriesID)->firstorFail();
		return view('admin.kategori.kategorisil', compact('Categories'));

	}
	public function kategoridestroy($CategoriesID)
    {
     $Categories = CategoriesModel::whereid($CategoriesID)->firstorFail();
     $Categories->delete();
     return redirect('admin/kategori/')->with('status' , $Categories->name.' Kategorisi Silindi.');
 }
}
