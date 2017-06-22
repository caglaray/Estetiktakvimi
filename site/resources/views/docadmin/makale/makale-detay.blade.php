@extends('doktormaster')
@section('title',' Makale Detay')

@section('content')


<table class="table">

	<tr>
		<td width="150px"><b>Makale Başlık :</b></td>
		<td>{!! $Article->title !!}</td>
	</tr>

	<tr>
		<td width="150px"><b>Makale İçerik :</b></td>
		<td>{!! $Article->content !!}</td>
	</tr>	
	
	<tr>
		<td width="150px"><b>Makale Durum :</b></td>
		<td><label for="input-text" style="margin-left:13px;" class="control-label">{!! $Article->status ? '<span class="label label-success">Açık' : '<span class="label label-danger">Onay Bekliyor' !!}</span></label></td>
	</tr>

	<tr>
		<td width="150px"><b>Makale Resim :</b></td>
		<td><img class="img-rounded" width="150px" src="{!! $Article->image !!}"></td>
	</tr>

	
	<tr>
		<td colspan="2"><a  class="btn btn-primary" href="../../makale">Geri Dön</a></td>
	</tr>

</table>





@endsection