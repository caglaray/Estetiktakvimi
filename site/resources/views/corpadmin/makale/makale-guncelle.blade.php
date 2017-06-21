@extends('kurummaster')
@section('title',' Makale Düzenle')

@section('content')

<div class="widget">

	<div class="widget-content padding">
		<form class="form-horizontal" method="post" role="form">

			<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />

			<div class="form-group">
				<label for="input-text" class="col-sm-2 control-label">Makale Başlığı</label>
				<div class="col-sm-10">
				
					<input type="text" value="{!! $Article->title !!}" class="form-control" name="title" placeholder="Makale Başlığı">

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

					<textarea  class="summernote" name="content" style="height: auto; width: auto;">{!! $Article->content !!}</textarea>

				</div>
				<input type="submit" value="Kaydet" class="btn btn-default" style="float: right; margin-right: 15px;">
			</div>
		</form>
	</div>

</div>
@endsection