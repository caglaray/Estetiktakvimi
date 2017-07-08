@extends('doktormaster')
@section('content')
<div class="widget-content">					
	<div class="table-responsive">
		<table data-sortable class="table">
			<thead>
				<tr>
					<th>
						@foreach ($appointmentdays as $dayofhours)

						@if ($dayofhours->status == 0)
						<input type="checkbox" class="rows-check" ><span>Bugün</span>


						<input type="checkbox" class="rows-check"><span>Yarın</span>
						<input type="checkbox" class="rows-check"><span id="nextday"></span>
						<input type="checkbox" class="rows-check"><span id="nextdays"></span>
						<input type="checkbox" class="rows-check"><span id="nexts"></span>
						<input type="checkbox" class="rows-check"><span id="nexts-1"></span>
						<input type="checkbox" class="rows-check"><span id="nexts-2"></span>
						<input type="checkbox" class="rows-check"><span id="nexts-3"></span>
						@break 
						
						@else
						<input type="checkbox" class="rows-check" checked=""> <span>Bugün</span>
						<input type="checkbox" class="rows-check" checked=""><span>Yarın</span>
						<input type="checkbox" class="rows-check" checked=""><span id="nextday"></span>
						<input type="checkbox" class="rows-check" checked=""><span id="nextdays"></span>
						<input type="checkbox" class="rows-check" checked=""><span id="nexts"></span>
						<input type="checkbox" class="rows-check" checked=""><span id="nexts-1"></span>
						<input type="checkbox" class="rows-check" checked=""><span id="nexts-2"></span>
						<input type="checkbox" class="rows-check" checked=""><span id="nexts-3"></span>

						
						@endif
						@break
						@endforeach
					</th>



				</tr>
			</thead>

			<tbody>	@foreach($appointmentdays as $dayofhours)
				<tr><form>
					<td> {!! $dayofhours->hours !!}@if($dayofhours->status == 0)
						<input type="checkbox" name="status" class="rows-check">
						@else
						<input type="checkbox" class="rows-check" checked="">
						@endif   </td>
					</tr>	


				</form>
				@endforeach
				<tr><td> 

				</td></tr>

			</tbody>
		</table>
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
