@extends('doktormaster')


@section('content')
<div class="widget">

	<div class="widget-header transparent">
		<h2><strong>Video </strong> Paylaş</h2>
		<div class="additional-btn">
			<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
			<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
			<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
		</div>
	</div>
	<div class="widget-content padding">
		<form method="post" class="form-horizontal" role="form">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />  
			<div class="form-group">
				<label for="input-text" class="col-sm-2 control-label">Video Başlığı</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="baslik" value="{!! $video->name !!}" id="input-text" placeholder="Video Başlığı">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Video Url</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="url" value="{!! $video->url !!}" id="input-text"  placeholder="Video Url Giriniz">
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