@extends('doktormaster')
@section('title','Makale Sil')

@section('content')


<form method="post" action="{!! action('Doctor\ArticleController@destroy',$Article->id) !!}" >
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<table class="table">
	<tr>
		<td width="150px">Makale ID :</td>
		<td>{!! $Article->id !!}</td>
	</tr>
	<tr>
		<td width="150px">Makale Başlık :</td>
		<td>{!! $Article->title !!}</td>
	</tr>
	<tr>
		<td width="150px">Makale İçerik :</td>
		<td>{!! $Article->content !!}</td>
	</tr>	
	<tr>
		<td width="150px">Oluşturan Kişi :</td>
		<td>{!! $Article->doctorid !!}</td>
	</tr>
	<tr>
		<td width="150px">Makale Durum :</td>
		<td>{!! $Article->status !!}</td>
	</tr>
	<tr>
		<td width="150px">Makale Resim :</td>
		<td>{!! $Article->resim !!}</td>
	</tr>
	<tr>
		<td width="150px">Makale Oluşturma Tarihi :</td>
		<td>{!! $Article->created_at !!}</td>
	</tr>
	<tr>
		<td width="150px">Makale Son Düzenlenme Tarihi :</td>
		<td>{!! $Article->updated_at !!}</td>
	</tr>
<tr><td colspan="2"><input type="submit" name="Sil" value="Makaleyi Sil" class="btn btn-danger"></td></tr>
</table>

</form>

@endsection