@extends('doktormaster')
@section('title',' Makale Liste')

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

				@if($articles->isEmpty())
				<div style="margin:20px;" class="text-right">
					<a class="btn btn-success btn-sm" href="/doktor/makale/ekle">Yeni Makale Ekle</a>
				</div>
				<div style="margin: 20px;" class="alert alert-danger">
						Kayıt Yok.
					</div>
				@else
				<div style="margin:20px;" class="text-right">
					<a class="btn btn-success btn-sm" href="/doktor/makale/ekle">Yeni Makale Ekle</a>
				</div>
			<form class='form-horizontal' role='form'>
					<table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Adı</th>
								<th>Makale İçeriği</th>
								<th>Tarih</th>
								<th>Durum</th>
								<th>İşlem</th>
							

							</tr>
						</thead>
						
						
						<tbody>
						@foreach($articles as $article)
						<tr>
							<td>{!! $article->id !!}</td>
							<td><strong>{{{ str_limit($article->title, $limit = 25, $end = '...')}}} </strong></td>
							<td>  {{{ str_limit($article->content, $limit = 30, $end = '...')}}} </td>
							<td>{!! $article->created_at !!}</td>
							<td><label for="input-text"  class="control-label">{!! $article->status ? '<span class="label label-success">Açık' : '<span class="label label-warning">Onay Bekliyor' !!}</span></label></td>
							<td>
								<div class="btn-group btn-group-xs">
									<a data-toggle="tooltip" href="{!! action('Doctor\ArticleController@show' , $article->id) !!}" title="Görüntüle" class="btn btn-default"><i class="fa fa-user"></i></a>
									<a data-toggle="tooltip" href="{!! action('Doctor\ArticleController@edit' , $article->id) !!}" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>

								
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
</div>
@endsection
