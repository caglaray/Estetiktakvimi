@extends('adminmaster')


@section('content')



<table class="table">

	<tr>
		<td width="150px"><b>Kategori Adı:</b></td>
		<td>{!! $Categories->name !!}</td>
	</tr>

	<tr>
		<td width="150px"><b>Kategori Hakkında:</b></td>
		<td>{!! $Categories->about !!}</td>
	</tr>	
	
	
	<tr>
		<td colspan="2"><a  class="btn btn-primary" href="../../kategori">Geri Dön</a></td>
	</tr>

</table>





@endsection