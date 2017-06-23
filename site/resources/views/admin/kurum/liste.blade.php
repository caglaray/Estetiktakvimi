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

			@if($corporations->isEmpty())
			<p> Kayıt Yok</p>
			@else
			<table data-sortable="" class="table" data-sortable-initialized="true">
				<thead>
					<tr>
						<th>Kurum ID</th>
						<th>Kurum Adı</th>
						<th>Üyelik Tipi</th>
						<th>Durum</th>
						<th data-sortable="false">İşlemler</th>
					</tr>
				</thead>

				<tbody>

				@foreach($corporations as $corporation)

					<tr>
						<td>{!! $corporation->id !!}</td>
						<td><a href="{!! action('Admin\CorporationController@show' , $corporation->id) !!}"> {!! $corporation->name !!}</a></td>
						<td>@if($corporation->group_id==0)
						Ücretsiz Üyelik
						@else
						Kurumsal Üyelik
						@endif</td> 
						
						<td>@if($corporation->status==0)
						<span class="label label-warning">Onay Bekliyor</span>
						@else
						<span class="label label-success">Onaylandı</span>
						@endif</td>
						<td>
							<div class="btn-group btn-group-xs">
								<a data-toggle="tooltip" title="Görüntüle" href="{!! action('Admin\CorporationController@show' , $corporation->id) !!}" class="btn btn-default"><i class="fa fa-user fa-1"></i></a>

								<a data-toggle="tooltip" title="Güncelle" href="{!! action('Admin\CorporationController@edit' , $corporation->id) !!}" class="btn btn-default"><i class="fa fa-edit"></i></a>

								<a data-toggle="tooltip" title="Sil" href="{!! action('Admin\CorporationController@silinecek' , $corporation->id) !!}" class="btn btn-default"><i class="fa fa-times fa-1"></i></a>
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