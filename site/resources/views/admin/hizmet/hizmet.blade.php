@extends('adminmaster')


@section('content')

<div class="row">


	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header">

				<h2><strong>Kategori Listesi</strong> 
					<a class="btn btn-success btn-sm" href="{{ route('admin.kategoriekle') }}" style="float: right; margin-top: 3px;">Yeni Kategori Ekle</a>
				</h2>
				
			</div>
			<div class="widget-content">
				<br>				

				<div class="table-responsive">
					<form class='form-horizontal' role='form'>
						@foreach($errors->all() as $error)
						<p class="alert alert-danger">{{ $error }}</p>
						@endforeach



						@if(session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
						@endif
						<table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Kategori Adı</th>
									<th>Kategori Açıklaması</th>
									<th>İşlem Yap</th>

								</tr>
							</thead>

							
							<tbody>
								@foreach($categories as $category)
								<tr>
									<td>{!! $category->id !!}</td>
									<td>{!! $category->name !!}</td>
									<td>{!! $category->about !!}</td>
									<td>	<div class="btn-group btn-group-xs">
								<a data-toggle="tooltip" title="Görüntüle" href="{!! action('Admin\HomeController@kategorishow' , $category->id) !!}" class="btn btn-default"><i class="fa fa-user fa-1"></i></a>

								<a data-toggle="tooltip" title="Güncelle" href="{!! action('Admin\HomeController@kategoriduzenle' , $category->id) !!}" class="btn btn-default"><i class="fa fa-edit"></i></a>
						
								<a data-toggle="tooltip" title="Sil" href="{!! action('Admin\HomeController@kategorisil' , $category->id) !!}" class="btn btn-default"><i class="fa fa-times fa-1"></i></a>
							</div></td>

								</tr>
								@endforeach

							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection