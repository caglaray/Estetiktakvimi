@extends('kurummaster')
@section('title',' Video Ekle')


@section('content')
<div class="widget">

	
	<div class="widget-content padding">
		<form method="post" class="form-horizontal" role="form">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />  
			<div class="form-group">
				<label for="input-text" class="col-sm-2 control-label">Video Başlığı</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="baslik" id="input-text" placeholder="Video Başlığı">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Video Url</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="url" id="input-text" placeholder="Video Url Giriniz">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Durum</label>
				<div class="col-sm-10">
					<select class="form-control selectpicker" name="durum">
						<option>Açık</option>
						<option>Kapalı</option>
						
					</select>
				</div>
			</div>
			<div class="col-sm-12"> <input type="submit" value="Paylaş" class="btn btn-default" style="float: right; margin-right: 10px;margin-bottom: 15px;"></div>
		</form>
	</div>
	
</div>
@endsection