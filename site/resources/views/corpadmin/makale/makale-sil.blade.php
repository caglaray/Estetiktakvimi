@extends('kurummaster')
@section('title','Makale Sil')

@section('content')


<form method="post" action="{!! action('Kurum\ArticleController@destroy',$Article->id) !!}" >
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
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
			<td><label for="input-text" style="margin-left:13px;" class="control-label">{!! $Article->status ? '<span class="label label-success">Açık' : '<span class="label label-danger">Kapalı' !!}</span></label></td>
		</tr>

		<tr>
			<td width="150px"><b>Makale Resim :</b></td>
			<td><img class="img-rounded" width="150px" src="{!! $Article->image !!}"></td>
		</tr>


		<tr>
			<td colspan="2" class="text-center">
				<a  class="btn btn-primary" href="../../makale">Geri Dön</a>	
				<input type="submit" name="Sil" value="Makaleyi Sil" class="btn btn-danger">
			</td>
		</tr>




	</table>

</form>

@endsection