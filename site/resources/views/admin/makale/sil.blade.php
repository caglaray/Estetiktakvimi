@extends('adminmaster')
@section('title','Makale Silme')

@section('content')
<form method="post" action="{!! action('MakaleController@destroy',$Makale->id) !!}" >
<input type="hidden" name="_token" value="{!! csrf_token() !!}">

<table class="table">
<tr>
<td width="150px">Makale ID :</td>
<td>{!! $Doctor->id !!}</td>
</tr>
<tr>
<td>Makale Başlık :</td>
<td>{!! $Doctor->username !!}</td>
</tr>
<tr>
<td>Makaleyi Yazan :</td>
<td>{!! $Doctor->name !!}</td>
</tr>
<tr>
<td>Makale İçerik :</td>
<td>{!! $Doctor->surname !!}</td>
</tr>

<tr colspan="2"><td>
<a class="btn btn-primary"  href="{!! action('MakaleController@MakaleListe', null)  !!}"  >Vazgeç</a>

<button type="submit" class="btn btn-danger">Sil</button>

</td></tr>
</table>
</form>
@endsection