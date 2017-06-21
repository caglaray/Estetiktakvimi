<?php

namespace App\Http\Controllers\Kurum;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\VideoModel;


class VideoController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth:corporation');
	}
	
	


	public function videoliste()
	{
		$userid = Auth::user()->id ;
		$videos = VideoModel::all()->where('corporationsid',$userid);
		return view('corpadmin.video.video-liste',compact('videos'));
	}


	public function videoekle()
	{
		return view('corpadmin.video.video-ekle');
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
			$userid = Auth::user()->id,
			'name' => $request->get('baslik'),
			'url' => $request->get('url'),
			'order' => "1",
			'corporationsid' => $userid,
			'status' => $idurum,
			

			));

		$video->save();


		return redirect('kurum/video')->with('status' , $video->name.' isimli Video Eklendi.');    

	}

	public function show($videoid)
	{
		$video = VideoModel::whereid($videoid)->firstorFail();
		return view('corpadmin.video.video-detay',compact('video'));
	}

	public function edit($videoid)
	{
		$video = VideoModel::whereid($videoid)->firstorFail();
		return view('corpadmin.video.video-guncelle', compact('video'));
	}


	public function update($videoid , Request $request)
	{
		$userid = Auth::user()->id ;

		$Video = VideoModel::whereid("$videoid")->firstorFail();

		$Video->name      = $request->get('baslik');
		$Video->url   = $request->get('url');
		$Video->order   = "1";
		$Video->corporationsid   =  $userid ;
		$Video->status   = "0";
		

		$Video->save();

		return redirect('kurum/video/')->with('status' , $Video->name.' isimli Video Güncellendi.');

	}

	public function sil($videoid)
	{

		$video = VideoModel::whereid($videoid)->firstorFail();
		return view('corpadmin.video.video-sil', compact('video'));

	}
	public function destroy($videoid)
	{
		$video = VideoModel::whereid($videoid)->firstorFail();
		$video->delete();
		return redirect('kurum/video/')->with('status' , $video->name.' isimli Video Silindi.');
	}


}
