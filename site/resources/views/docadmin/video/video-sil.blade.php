@extends('doktormaster')

@section('content')
<div class="widget">

	<div class="widget-header transparent">
		<h2><strong>Video </strong> Sil</h2>
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
				<label for="input-text" style="margin-left:13px;" class="control-label">{!! $video->name  !!}</label>
				
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Video Url</label>
				<label for="input-text" style="margin-left:13px;" class="control-label">{!! $video->url  !!}</label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Durum</label>
				<div class="col-sm-10">
					<label for="input-text" style="margin-left:13px;" class="control-label">{!! $video->status ? '<span class="label label-success">Açık' : '<span class="label label-danger">Kapalı' !!}</span></label>
				</div>
			</div>
			<div style="padding:30px"><input class="btn btn-danger" type="submit" name="BtnSil" value="Sil"></div>
	
		</form>
	</div>
	
</div>
@endsection