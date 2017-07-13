@extends('adminmaster')


@section('content')


<form method="post" action="{!! action('Admin\HomeController@kategoridestroy',$Categories->id) !!}" >
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	<table class="table">

		<tr>
			<td width="150px"><b>Kategori Adı:</b></td>
			<td>{!! $Categories->name !!}</td>
		</tr>

		<tr>
			<td width="150px"><b>Kategori Hakkında :</b></td>
			<td>{!! $Categories->about !!}</td>
		</tr>	
		<tr>
			<td colspan="2" class="text-center">
				<a  class="btn btn-primary" href="../../kategori">Geri Dön</a>	
				<input type="submit" name="Sil" value="Sil" class="btn btn-danger">
			</td>
		</tr>




	</table>

</form>

@endsection