@extends('doktormaster')


@section('content')

<div class="widget">
	<div class="widget-header transparent">
		<h2><strong>Makale </strong> Paylaş</h2>
		<div class="additional-btn">
			<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
			<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
			<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>

		</div>
	</div>
	<div class="widget-content padding">
		<form class="form-horizontal" method="post" role="form">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />   
			<div class="form-group">
				<label for="input-text" class="col-sm-2 control-label">Makale Başlığı</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title" placeholder="Makale Başlığı">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Makale Resmi</label>
				<div class="col-sm-10">
					<input type="file" class="btn btn-default" name="resim" title="Dosya Seç">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Makale İçeriği</label>
				<div class="col-sm-10">
					<textarea class="summernote" name="content" style="height: auto; width: auto;"></textarea>
				</div>
				<input type="submit" value="Paylaş" class="btn btn-default" style="float: right; margin-right: 15px;">
			</div>
		</form>
	</div>

</div>
@endsection