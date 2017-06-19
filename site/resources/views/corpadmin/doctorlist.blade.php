@extends('kurummaster')
@section('content')

<div class="col-md-12">
	<div class="widget">
		<div class="widget-header transparent">

		</div>
		<div class="widget-content">					
			<div class="table-responsive">
		
			
		
				<table data-sortable="" class="table" data-sortable-initialized="true">
					<thead>
						<tr>
						
							<th>Adı</th>
							<th>Soyadı</th>
							<th>Kategorisi</th>
							<th>Email</th>
							<th>Durum</th>
							<th>Randevu Sistemi</th>
							<th data-sortable="false">İşlemler</th>
						</tr>
					</thead>

					<tbody>

						

					<tr>
						
						<td>Adı</td>
						<td>Soyadı</td>
						<td>Kategorisi</td>
						<td>E-mail</td>
						<td><span class="label label-success">Aktif</span></td>
						<td><button href="#" class="btn btn-default btn-xs" style="margin-left: 25%;"> <i class="fa fa-calendar" aria-hidden="true"></i></td>
						
						<td>
							<div class="btn-group btn-group-xs">
								<a data-toggle="tooltip" title="Görüntüle" href="/kurum/doktor-profil" class="btn btn-default"><i class="fa fa-user fa-1"></i></a>

								<a data-toggle="tooltip" title="Güncelle" href="" class="btn btn-default"><i class="fa fa-edit"></i></a>
						
								<a data-toggle="tooltip" title="Sil" href="" class="btn btn-default"><i class="fa fa-times fa-1"></i></a>
							</div>
						</td>
					</tr>

					<tr>
						
						<td>Adı</td>
						<td>Soyadı</td>
						<td>Kategorisi</td>
						<td>E-mail</td>
						<td><span class="label label-success">Aktif</span></td>
						<td><a href="#" class="btn btn-default btn-xs" style="margin-left: 25%;"> <i class="fa fa-calendar" aria-hidden="true"></i></a></td>
						
						<td>
							<div class="btn-group btn-group-xs">
								<a data-toggle="tooltip" title="Görüntüle" href="" class="btn btn-default"><i class="fa fa-user fa-1"></i></a>

								<a data-toggle="tooltip" title="Güncelle" href="" class="btn btn-default"><i class="fa fa-edit"></i></a>
						
								<a data-toggle="tooltip" title="Sil" href="" class="btn btn-default"><i class="fa fa-times fa-1"></i></a>
							</div>
						</td>
					</tr>
					
					</tbody>
				</table>
			
			</div>
		</div>
	</div>
</div>


@endsection