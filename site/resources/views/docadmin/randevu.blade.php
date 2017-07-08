@extends('doktormaster')
@section('content')




<div class="row">
	
	<div class="col-md-12">
		

<td>


@foreach($appointmentdays as $hours)
<tr>
	
	@if($hours->status==0)
	
	@else

	@endif

</tr>
@endforeach
</td>

	</div>
</div>

<script>


	//var d=new Date()
  //  var weekday=new Array("Pazar","Pazartesi","Salı","Çarşamba","Perşembe",
      //          "Cuma","Cumartesi"); weekday[d.getDay()+1] 


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
  </script>




  @endsection
