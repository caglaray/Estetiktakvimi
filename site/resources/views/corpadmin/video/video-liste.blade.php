@extends('kurummaster')
@section('title',' Video Liste')

@section('content')
<div class="col-md-12">

	<div class="widget">

		<div class="widget-content">
			<div style="margin:20px;" class="text-right">
				<a class="btn btn-success btn-sm" href="/kurum/video/ekle">Yeni Video Ekle</a>
			</div>
			<div class="table-responsive">
				@if(session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
				@endif

				@if($videos->isEmpty())
				<p> Kayıt Yok</p>
				@else
				<div style="margin:20px;" class="text-right">
					<a class="btn btn-success btn-sm" href="/kurum/video/ekle">Yeni Video Ekle</a>
				</div>
				<table data-sortable="" class="table" data-sortable-initialized="true">
					<thead>

						<tr>
							<th>No</th>
							<th>Video Adı</th>
							<th>Sıralama</th>
							<th>Yükleme Tarih</th>
							<th>Durum</th>
							<th>İşlemler</th>
						</tr>
					</thead>

					<tbody>
						@foreach($videos as $video)
						<tr>
							<td>{!! $video->id !!}</td>
							<td>{!! $video->name !!}</td>
							<td>{!! $video->order !!}</td>
							<td>{!! $video->created_at !!}</td>
							<td>{!! $video->status ? '<span class="label label-success">Onaylandı' : '<span class="label label-warning">Onay Bekliyor' !!}</span></td>
							<td>
								<div class="btn-group btn-group-xs">
									<a data-toggle="tooltip" href="{!! action('Kurum\VideoController@show' , $video->id) !!}" title="Görüntüle" class="btn btn-default"><i class="fa fa-user"></i></a>
									<a data-toggle="tooltip" href="{!! action('Kurum\VideoController@edit' , $video->id) !!}" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>

									<a data-toggle="tooltip" href="{!! action('Kurum\VideoController@sil' , $video->id) !!}" title="Sil" class="btn btn-default"><i class="icon-cancel-3"></i></a>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				@endif
			</div>
			<div class="data-table-toolbar text-center">
				<ul class="pagination">
					<li class="disabled"><a href="#">&laquo;</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection