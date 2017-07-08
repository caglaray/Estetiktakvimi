@extends('doktormaster')
@section('content')
<form role="form"  style="margin:20px" method="post">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
	<button class="btn btn-success" type="submit" name="randevu" value="olustur">Haftalık Randevu Oluştur</button>
</form>
@endsection
