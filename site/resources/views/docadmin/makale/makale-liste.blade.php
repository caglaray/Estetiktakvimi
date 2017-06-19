@extends('doktormaster')


@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><strong>Makaleler</strong></h2>

			</div>
			<div class="widget-content">
				@if(session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
				@endif
				<div class="data-table-toolbar">
					<div class="row">
						<div class="col-md-4">
							<form role="form">
								<input type="text" class="form-control" placeholder="Search...">
							</form>
						</div>
						<div class="col-md-8">
							<div class="toolbar-btn-action">
								<a class="btn btn-success" href="/doktor/makale/ekle"><i class="fa fa-plus-circle"></i> Yeni Ekle</a>

							</div>
						</div>
					</div>
				</div>
				
				<div class="table-responsive">
					@if($articles->isEmpty())
					<div style="margin: 20px;" class="alert alert-danger">
						Kayıt Yok.
					</div>
					@else
					<table data-sortable class="table table-hover table-striped">
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
								<td>{!! str_limit($article->content, $limit = 40, $end = '...')  !!}</td>
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
				
				<div class="data-table-toolbar">
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
	
</div>
@endsection