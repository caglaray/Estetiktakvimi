@extends('adminmaster')


@section('content')


<div class="widget">

	<div class="widget-content padding">
		<form class="form-horizontal" method="post" role="form">

			<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />

			<div class="form-group">
				<label for="input-text" class="col-sm-2 control-label">Makale Başlığı</label>
				<div class="col-sm-10">
				
					<input type="text" value="{!! $Categories->name !!}" class="form-control" name="name" placeholder="Makale Başlığı">

				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Kategori Hakkında</label>
				<div class="col-sm-10">

					<textarea  class="summernote" name="content" style="height: auto; width: auto;">{!! $Categories->content !!}</textarea>

				</div>
				<input type="submit" value="Kaydet" class="btn btn-default" style="float: right; margin-right: 15px;">
			</div>
		</form>
	</div>

</div>
@endsection