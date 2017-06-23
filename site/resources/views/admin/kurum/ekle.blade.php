@extends('adminmaster')
@section('title','Kurum Ekle')

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
				<label>Kurum Adı</label>
				<input type="text" class="form-control" name="name" placeholder="Adı" id="name">
			</div>
			
						
			<div class="form-group">
				<label>Kullanıcı Adı</label>
				<input type="text" class="form-control"  name="username" placeholder="Kullanıcı Adı"  id="username">
			</div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<label>Şifre</label>
						<input id="password" type="password" class="form-control" name="password" id="password">
					</div>
					<div class="col-sm-6">
						<label>Şifre Tekrar</label>
						<input type="password" class="form-control" name="confirmPassword"  id="confirmPassword">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Hakkında</label>
				<textarea class="form-control" name="about" maxlength="250" placeholder="Hakkında" " id="about"></textarea>
			</div>
			<div class="form-group">
				<label>Mail Adresi</label>
				<input type="text" class="form-control" name="email" placeholder="Mail Adresi" " id="email">
			</div>
			<div class="form-group">
				<label>Telefon</label>
				<input type="number" class="form-control" name="telephone" placeholder="Telefon Numarası" id="telephone">
			</div>
			<div class="form-group">
				<label>Adres</label>
				<input type="text" class="form-control" name="adress" placeholder="Adresi" " id="adress">
			</div>
			<div class="form-group">
				<label>Logo Ekle</label><br>
				<input type="file" class="btn btn-default" name="logo" title="Resim Seç" style="left: -218.156px; top: 4px;">
			</div>
			
			<div class="form-group">

				<label>Şehir</label>
				<select name="city"  class="form-control">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>

				</select>
			</div>



			
			<button type="submit" class="btn btn-primary">Kaydet</button>
			
		</form>
	</div>
</div>

@endsection