@extends('adminmaster')
@section('title','Doktor Ekle')

@section('content')




<div class="widget" style="position: relative; opacity: 1; left: 0px; top: 0px;">
	<div>
		<h2><strong></strong></h2>
	</div>
	<div class="widget-content padding" style="display: block;">
		<form role="form" method="post" id="registerForm" class="bv-form">




			<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />   



			@foreach($errors->all() as $error)
			<p class="alert alert-danger">{{ $error }}</p>
			@endforeach



			@if(session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif



			<div class="form-group">
				<label>Kullanıcı Adı</label>
				<input type="text" class="form-control"  name="username"  id="username">
			</div>
			<div class="form-group">
				<label>Adı</label>
				<input type="text" class="form-control" name="name" id="name">
			</div>
			<div class="form-group">
				<label>Soyadı</label>
				<input type="text" class="form-control" name="surname" id="surname">
			</div>
			<div class="form-group">
				<label>Mail Adresi</label>
				<input type="text" class="form-control" name="email" id="email">
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<label>Şifre</label>
						<input id="password" type="password" class="form-control" name="password" id="password">
					</div>
					<div class="col-sm-6">
						<label>Şifre Tekrar</label>
						<input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Telefon</label>
				<input type="text" class="form-control" name="telephone" id="telephone">
			</div>
			<div class="form-group">
				<label>Adres</label>
				<input type="text" class="form-control" name="adress" id="adress">
			</div>
			<div class="form-group">
				<label>Fotoğraf URL</label>
				<input type="text" class="form-control" name="photourl" id="photourl">
			</div>
			<div class="form-group">
				<label>Doğum Tarihi</label>
				<input type="text" class="form-control" name="birthday" id="birthday">
			</div>
			<div class="form-group">
				<label>Yaşadığınız Şehir</label>
				<input type="text" class="form-control" name="livecity" id="livecity">
			</div>



			<div class="form-group">
				<label class="control-label" id="captchaOperation">Doğrulama : 30 + 1 = </label>
				<div class="row">
					<div class="col-sm-4">
						<input type="text" class="form-control" name="captcha" data-bv-field="captcha">
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Kaydet</button>
			<input type="hidden" value="">
		</form>
	</div>
</div>

@endsection