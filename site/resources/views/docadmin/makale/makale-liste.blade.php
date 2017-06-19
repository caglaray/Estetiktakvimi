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
				<p> Kayıt Yok</p>
				@else
				<div style="margin:20px;" class="text-right">
					<a class="btn btn-success btn-sm" href="/doktor/makale/ekle">Yeni Makale Ekle</a>
				</div>
				<table data-sortable="" class="table" data-sortable-initialized="true">
					<thead>
						<tr>
							<th>No</th>
							<th>Video Adı</th>
							<th>Makale Detay</th>
							<th>Tarih</th>
							<th>Durum</th>
							<th data-sortable="false">Seç</th>
						</tr>
					</thead>

					<tbody>
						@foreach($articles as $article)
						<tr>
							<td>{!! $article->id !!}</td>
							<td><strong>{!! $article->title !!}</strong></td>
							<td>  {{{ str_limit($article->content, $limit = 25, $end = '...')}}} </td>
							<td>{!! $article->created_at !!}</td>
							<td><span class="label label-success">Aktif</span></td>
							<td>
								<div class="btn-group btn-group-xs">
									<a data-toggle="tooltip" href="{!! action('Doctor\ArticleController@show' , $article->id) !!}" title="Görüntüle" class="btn btn-default"><i class="fa fa-user"></i></a>
									<a data-toggle="tooltip" href="{!! action('Doctor\ArticleController@edit' , $article->id) !!}" title="Düzenle" class="btn btn-default"><i class="fa fa-edit"></i></a>

									<a data-toggle="tooltip" href="{!! action('Doctor\ArticleController@silinecek' , $article->id) !!}" title="Sil" class="btn btn-default"><i class="icon-cancel-3"></i></a>
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