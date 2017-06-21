@extends('kurummaster')
@section('title','Video Sil')

@section('content')


<form method="post" action="{!! action('Kurum\VideoController@destroy',$video->id) !!}" >
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	<table class="table">

		<tr>
			<td width="150px"><b>Video Başlık :</b></td>
			<td>{!! $video->name  !!}</td>
		</tr>

		<tr>
			<td width="150px"><b>Video URL :</b></td>
			<td>{!! $video->url  !!}</td>
		</tr>	

		<tr>
			<td width="150px"><b>Video Durum :</b></td>
			<td><label for="input-text" style="margin-left:13px;" class="control-label">{!! $video->status ? '<span class="label label-success">Açık' : '<span class="label label-danger">Kapalı' !!}</span></label></td>
		</tr>

		<tr>
			<td colspan="2" class="text-center">
				<a  class="btn btn-primary" href="../../video">Geri Dön</a>	
				<input class="btn btn-danger" type="submit" name="BtnSil" value="Sil">
			</td>
		</tr>




	</table>

</form>

@endsection