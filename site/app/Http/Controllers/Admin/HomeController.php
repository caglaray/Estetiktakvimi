<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoriesModel;

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
		return view('admin.kategori' , compact('categories'));       

		
	}

//Admin Kategori Ekle Blade Tema Çağırılması
	public function kategoriekle()
	{

		return view('admin.kategoriekle')->with('status', 'Kayıt Başarıyla Eklenmiştir.');    

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
        return view('admin.kategoridetay' , compact('Categories'));   
    }
    public function kategoriedits($CategoriesID)
    {
        $Categories = CategoriesModel::whereid($CategoriesID)->firstorFail();
        return view('admin.kategoridetay' , compact('Categories'));  
    }
    public function kategoriupdate($CategoriesID , DoctorEkleRequestForm $request)
    {

       $Categories = CategoriesModel::whereid($CategoriesID)->firstorFail();

        $Categories->name      = $request->get('name');
        $Categories->about  = $request->get('about');

        $Categories->save();

        return redirect(action('Admin\HomeController@kategori',$CategoriesID))->with('status',$Categories->name.' adlı Kategori Güncellendi.');
    }
}
