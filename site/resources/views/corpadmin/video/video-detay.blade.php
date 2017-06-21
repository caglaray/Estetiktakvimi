@extends('kurummaster')
@section('title',' Video Detay')

@section('content')


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
		<td colspan="2"><a  class="btn btn-primary" href="../../video">Geri Dön</a></td>
	</tr>

</table>





@endsection