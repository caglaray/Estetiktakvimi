@extends('doktormaster')
@section('title',' Video Liste')

@section('content')
<div class="col-md-12">

	<div class="widget">

		<div class="widget-content">

			<div class="table-responsive">
				@if(session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
				@endif

				@if($videos->isEmpty())
				<div style="margin:20px;" class="text-right">
					<a class="btn btn-success btn-sm" href="/doktor/video/ekle">Yeni Video Ekle</a>
				</div>
				<div style="margin: 20px;" class="alert alert-danger">
						Kayıt Yok.
					</div>
				@else
				<div style="margin:20px;" class="text-right">
					<a class="btn btn-success btn-sm" href="/doktor/video/ekle">Yeni Video Ekle</a>
				</div>
				<form class='form-horizontal' role='form'>
					<table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Video Adı</th>
							
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
								
								<td>{!! $video->created_at !!}</td>
								<td>{!! $video->status ? '<span class="label label-success">Açık' : '<span class="label label-warning">Onay Bekliyor' !!}</span></td>
								<td>
									<div class="btn-group btn-group-xs">
										<a data-toggle="tooltip" href="{!! action('Doctor\VideoController@show' , $video->id) !!}" title="Görüntüle" class="btn btn-default"><i class="fa fa-user"></i></a>
										<a data-toggle="tooltip" href="{!! action('Doctor\VideoController@edit' , $video->id) !!}" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>

										<a data-toggle="tooltip" href="{!! action('Doctor\VideoController@sil' , $video->id) !!}" title="Sil" class="btn btn-default"><i class="icon-cancel-3"></i></a>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
				</table>
				</form>
				@endif
			</div>
		
		</div>
	</div>
</div>
@endsection
