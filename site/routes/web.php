<?php


Route::get('/', function () {
	return view('index');
});


Auth::routes();

Route::get('/Home', 'HomeController@index');


Route::prefix('admin')->group(function() {
	
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	Route::get ("/doktor/liste","Admin\DoctorController@DoktorListe");
	Route::get ("/doktor/ekle","Admin\DoctorController@DoktorEkle");
	Route::post("/doktor/ekle","Admin\DoctorController@store");
	Route::get ("/doktor/detay/{Kisi?}","Admin\DoctorController@show");
	Route::get ("/doktor/guncelle/{Kisi?}","Admin\DoctorController@edit");
	Route::post("/doktor/guncelle/{Kisi?}","Admin\DoctorController@update");
	Route::get ("/doktor/sil/{Kisi?}","Admin\DoctorController@silinecek");
	Route::post("/doktor/sil/{Kisi?}","Admin\DoctorController@destroy");


});


Route::prefix('kurum')->group(function() {

	Route::get('/login', 'Auth\CorporationLoginController@showLoginForm')->name('corporation.login');
	Route::post('/login', 'Auth\CorporationLoginController@login')->name('corporation.login.submit');
	Route::get('/', 'CorporationController@index')->name('corporation.dashboard');



});




Route::prefix('doktor')->group(function() {

	Route::get ('/login', 'Auth\DoctorLoginController@showLoginForm')->name('doctor.login');
	Route::post('/login', 'Auth\DoctorLoginController@login')->name('docadmin.login.submit');
	Route::get ('/', 'Doctor\HomeController@Doktorindex')->name('doctor.dashboard');


	route::get ("/makale","Doctor\ArticleController@makaleliste");
	Route::get ("/makale/ekle","Doctor\ArticleController@makaleekle");
	Route::post("/makale/ekle","Doctor\ArticleController@store");
	Route::get ("/makale/detay/{id?}","Doctor\ArticleController@show");
	Route::get ("/makale/guncelle/{Makaleid?}","Doctor\ArticleController@edit");
	Route::post("/makale/guncelle/{Makaleid?}","Doctor\ArticleController@update");
	Route::get ("/makale/sil/{Makaleid?}","Doctor\ArticleController@silinecek");
	Route::post("/makale/sil/{Makaleid?}","Doctor\ArticleController@destroy");


	route::get ("/video","Doctor\VideoController@videoliste");
	route::get ("/video/ekle", "Doctor\VideoController@videoekle");
	route::post("/video/ekle", "Doctor\VideoController@store");
	Route::get ("/video/detay/{videoid?}","Doctor\VideoController@show");
	Route::get ("/video/guncelle/{videoid?}","Doctor\VideoController@edit");
	Route::post("/video/guncelle/{videoid?}","Doctor\VideoController@update");
	Route::get ("/video/sil/{videoid?}","Doctor\VideoController@sil");
	Route::post("/video/sil/{videoid?}","Doctor\VideoController@destroy");

	route::get ("/sorucevap/soru","Doctor\QuestionController@questionlist");
	route::get ("/sorucevap/cevap/{id?}","Doctor\QuestionController@questiondetail");	


	//route::get ("/sorucevap/cevap","Doctor\HomeController@cevap");


});

