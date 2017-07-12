@extends('adminmaster')


@section('content')


@foreach($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach



@if(session('status'))
<div class="alert alert-success">
	{{ session('status') }}
</div>
@endif
<div class="widget">
	<div class="widget-header transparent">
		<h2><strong>Kategori</strong> Ekle</h2>

	</div>
	<div class="widget-content padding">
		<form role="form" method="post" id="kategoriform" class="bv-form">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
			<div class="form-group">
				<label for="input-text" class="col-sm-2 control-label">Kategori Adı</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" id="input-text" placeholder="Kategori Adı">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Hakkında</label>
				<div class="col-sm-10">
					<textarea class="summernote" name="about"></textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-primary" style="float: right; margin-right:14px; margin-top: 5px;margin-bottom: 5px;">Kaydet</button>
		</form>
	</div>

</div>
@endsection