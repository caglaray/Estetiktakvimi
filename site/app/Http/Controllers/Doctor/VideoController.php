<?php

namespace App\Http\Controllers\Doctor;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\VideoModel;


class VideoController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth:doctor');
	}

	
	public function deneme()
	{
		$videos = VideoModel::all();
		return view('docadmin.deneme');
	}




	public function videoliste()
	{
		$userid = Auth::user()->id ;
		$videos = VideoModel::all()->where('doctorid',$userid);
		return view('docadmin.video.video-liste',compact('videos'));
	}


	public function videoekle()
	{
		return view('docadmin.video.video-ekle');
	}

	public function store(Request $request)
	{
			$userid = Auth::user()->id ;

		$idurum = $request->get('durum');

		if ($idurum==="Açık") {

			$idurum=1;

		}

		else if ($idurum==="Kapalı") {
			$idurum=0;
		}

		else{
			$idurum=9;
		}

		


		$video = new VideoModel(array(

			'name' => $request->get('baslik'),
			'url' => $request->get('url'),
			'order' => "1",
			'doctorid' => $userid,
			'status' => $idurum,
			

			));

		$video->save();


		return redirect('doktor/video')->with('status' , $video->name.' isimli Video Eklendi.');    

	}

	public function show($videoid)
	{
		$video = VideoModel::whereid($videoid)->firstorFail();
		return view('docadmin.video.video-detay',compact('video'));
	}

	public function edit($videoid)
	{
		$video = VideoModel::whereid($videoid)->firstorFail();
		return view('docadmin.video.video-guncelle', compact('video'));
	}


	public function update($videoid , Request $request)
	{


		$Video = VideoModel::whereid("$videoid")->firstorFail();

		$Video->name      = $request->get('baslik');
		$Video->url   = $request->get('url');
		$Video->order   = "1";
		$Video->doctorid   = "1";
		$Video->status   = "1";
		

		$Video->save();

		return redirect('doktor/video/')->with('status' , $Video->name.' isimli Video Güncellendi.');

	}

	public function sil($videoid)
	{

		$video = VideoModel::whereid($videoid)->firstorFail();
		return view('docadmin.video.video-sil', compact('video'));

	}
	public function destroy($videoid)
	{
		$video = VideoModel::whereid($videoid)->firstorFail();
		$video->delete();
		return redirect('doktor/video/')->with('status' , $video->name.' isimli Video Silindi.');
	}


}
