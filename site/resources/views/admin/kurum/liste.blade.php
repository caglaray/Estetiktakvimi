@extends('adminmaster')
@section('title','Kurum Listesi')

@section('content')


	<div class="widget">
		<div class="widget-header transparent">

		</div>
		<div class="widget-content">					
			<div class="table-responsive">
			@if(session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif

				@if($corporation->isEmpty())
				<p> Kayıt Yok</p>
				@else
				<table data-sortable="" class="table" data-sortable-initialized="true">
					<thead>
						<tr>
							<th>No</th>
							<th>Kurum Adı</th>
							<th>Üyelik Tipi</th>
							<th>Soyadı</th>
							<th>Email</th>
							<th>Durum</th>
							<th data-sortable="false">İşlemler</th>
						</tr>
					</thead>

					<tbody>

						@foreach($corporation as $doctor)

					<tr>
						<td>{!! $doctor->id !!}</td>
						<td><a href="{!! action('Admin\DoctorController@show' , $doctor->id) !!}"> {!! $doctor->username !!}</a></td>
						<td>{!! $doctor->name !!}</td>
						<td>{!! $doctor->surname !!}</td>
						<td><a href="mailto:#">{!! $doctor->email !!}</a></td>
						<td><span class="label label-success">Aktif</span></td>
						<td>
							<div class="btn-group btn-group-xs">
								<a data-toggle="tooltip" title="Görüntüle" href="{!! action('Admin\DoctorController@show' , $doctor->id) !!}" class="btn btn-default"><i class="fa fa-user fa-1"></i></a>

								<a data-toggle="tooltip" title="Güncelle" href="{!! action('Admin\DoctorController@edit' , $doctor->id) !!}" class="btn btn-default"><i class="fa fa-edit"></i></a>
						
								<a data-toggle="tooltip" title="Sil" href="{!! action('Admin\DoctorController@silinecek' , $doctor->id) !!}" class="btn btn-default"><i class="fa fa-times fa-1"></i></a>
							</div>
						</td>
					</tr>
						@endforeach
					</tbody>
				</table>
				@endif
			</div>
		</div>
	</div>

@endsection