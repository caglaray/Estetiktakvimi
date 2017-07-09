@extends('doktormaster')
@section('content')
<div class="row">

	<div class="col-md-12">
		<div class="widget">
			<div class="">


			</div>
			<div class="">					
				<div class="table-responsive">
					<table data-sortable class="table">
						<thead>
							<tr>
								<th><span style="size: 10px;">Bugün</span></th>
								<th>Yarın</th>
								<th><span id="nextday"></span></th>
								<th><span id="nextdays"></span></th>
								<th><span id="nexts"></span></th>
								<th><span id="nexts-1"></span></th>
								<th><span id="nexts-2"></span></th>
								<th><span id="nexts-3"></span></th>

							</tr>
						</thead>

						<tbody>
							@foreach($appointmentdays1 as $dayofhours)
							<tr>
								<td>
									
									{!! $dayofhours->hours !!}
									@if ($dayofhours->status == 0)
									<input type="checkbox" class="rows-check" >
									@else
									<input type="checkbox" class="rows-check" checked="">
									@endif
									@if ($dayofhours->hours >'20:00')
									@break
									@endif
								</td><!--saat-->
								<td>
									
									
									{!! $dayofhours->hours !!}
									@if ($dayofhours->status == 0)
									<input type="checkbox" class="rows-check" >
									@else
									<input type="checkbox" class="rows-check" checked="">
									@endif
									@if ($dayofhours->hours >'20:00')
									@break
									@endif
								</td><!--saat-->
								<td>
									
									{!! $dayofhours->hours !!}
									@if ($dayofhours->status == 0)
									<input type="checkbox" class="rows-check" >
									@else
									<input type="checkbox" class="rows-check" checked="">
									@endif
									@if ($dayofhours->hours >'20:00')
									@break
									@endif
								</td><!--saat-->
								<td>	
									
									{!! $dayofhours->hours !!}
									@if ($dayofhours->status == 0)
									<input type="checkbox" class="rows-check" >
									@else
									<input type="checkbox" class="rows-check" checked="">
									@endif
									@if ($dayofhours->hours >'20:00')
									@break
									@endif
								</td><!--saat-->
								<td>
									
									
									{!! $dayofhours->hours !!}
									@if ($dayofhours->status == 0)
									<input type="checkbox" class="rows-check" >
									@else
									<input type="checkbox" class="rows-check" checked="">
									@endif
									@if ($dayofhours->hours >'20:00')
									@break
									@endif
								</td><!--saat-->
								<td>
									
									
									{!! $dayofhours->hours !!}
									@if ($dayofhours->status == 0)
									<input type="checkbox" class="rows-check" >
									@else
									<input type="checkbox" class="rows-check" checked="">
									@endif
									@if ($dayofhours->hours >'20:00')
									@break
									@endif
								</td><!--saat-->
								<td>
									
									{!! $dayofhours->hours !!}
									@if ($dayofhours->status == 0)
									<input type="checkbox" class="rows-check" >
									@else
									<input type="checkbox" class="rows-check" checked="">
									@endif
									@if ($dayofhours->hours >'20:00')
									@break
									@endif
								</td><!--saat-->
								<td>
									
									{!! $dayofhours->hours !!}
									@if ($dayofhours->status == 0)
									<input type="checkbox" class="rows-check" >
									@else
									<input type="checkbox" class="rows-check" checked="">
									@endif
									@if ($dayofhours->hours =='19:30')
									@break
									@endif
								</td><!--saat-->
							</tr>
							@endforeach


						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>



	var months = ['Oca','Şub','Mar','Nis','May','Haz','Tem',
	'Ağu','Eyl','Eki','Kas','Ara'];           
	var tomorrow = new Date();
	tomorrow.setTime(tomorrow.getTime() + (1000*3600*48));       
	document.getElementById("nextday").innerHTML = tomorrow.getDate('')+ " " + months[tomorrow.getMonth()];

	var months = ['Oca','Şub','Mar','Nis','May','Haz','Tem',
	'Ağu','Eyl','Eki','Kas','Ara'];           
	var tomorrow = new Date();
	tomorrow.setTime(tomorrow.getTime() + (1000*3600*72));       
	document.getElementById("nextdays").innerHTML = tomorrow.getDate('')+ " " + months[tomorrow.getMonth()] ;

	var months = ['Oca','Şub','Mar','Nis','May','Haz','Tem',
	'Ağu','Eyl','Eki','Kas','Ara'];           
	var tomorrow = new Date();
	tomorrow.setTime(tomorrow.getTime() + (1000*3600*96));       
	document.getElementById("nexts").innerHTML = tomorrow.getDate('')+ " " + months[tomorrow.getMonth()] ;

	var months = ['Oca','Şub','Mar','Nis','May','Haz','Tem',
	'Ağu','Eyl','Eki','Kas','Ara'];           
	var tomorrow = new Date();
	tomorrow.setTime(tomorrow.getTime() + (1000*3600*120));       
	document.getElementById("nexts-1").innerHTML = tomorrow.getDate('')+ " " + months[tomorrow.getMonth()] ;

	var months = ['Oca','Şub','Mar','Nis','May','Haz','Tem',
	'Ağu','Eyl','Eki','Kas','Ara'];           
	var tomorrow = new Date();
	tomorrow.setTime(tomorrow.getTime() + (1000*3600*144));       
	document.getElementById("nexts-2").innerHTML = tomorrow.getDate('')+ " " + months[tomorrow.getMonth()] ;

	var months = ['Oca','Şub','Mar','Nis','May','Haz','Tem',
	'Ağu','Eyl','Eki','Kas','Ara'];           
	var tomorrow = new Date();
	tomorrow.setTime(tomorrow.getTime() + (1000*3600*168));       
	document.getElementById("nexts-3").innerHTML = tomorrow.getDate('')+ " " + months[tomorrow.getMonth()] ;
</script>
@endsection
