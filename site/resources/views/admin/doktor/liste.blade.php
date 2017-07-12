@extends('adminmaster')
@section('title','Doktor Liste')

@section('content')
<div class="col-md-12">
	<div class="widget">
		<div class="widget-header">
			<h2><strong>Doktor Listesi</strong></h2>
			
		</div>
		<div class="widget-content">
			<br>					
			<div class="table-responsive">
				@if(session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
				@endif

				@if($doctors->isEmpty())
				<p> Kayıt Yok</p>
				@else
				<form class='form-horizontal' role='form'>
					<table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Adı</th>
								<th>Soyadı</th>
								<th>E-mail</th>
								<th>Üyelik Durumu</th>
								<th> </th>
							</tr>
						</thead>
						
						
						<tbody>
							@foreach($doctors as $doctor)
							<tr>
								<td>{!! $doctor->id !!}</td>
								
								<td><a href="{!! action('Admin\DoctorController@show' , $doctor->id) !!}">{!! $doctor->name !!}</a></td>
								<td>{!! $doctor->surname !!}</td>
								<td>{!! $doctor->email !!}</td>
								<td>
									<div class="btn-group">
										@if($doctor->status==1)<button type="button" class="btn btn-success"> Onaylandı </button> @else<button type="button" class="btn btn-warning"> Onaylanmadı </button>@endif
										<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-cog"></i>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Onayla</a></li>
											<li><a href="#">Onaylanmadı</a></li>
											
										</ul>
									</div>

								</td>
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
				</form>
				@endif
			</div>
		</div>
	</div>
	

	@endsection