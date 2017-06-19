@extends('kurummaster')
@section('content')



<div class="widget" style="position: relative; opacity: 1; left: 0px; top: 0px;">
	<div>
		<h2><strong></strong></h2>
	</div>
	<div class="widget-content padding" style="display: block;">
		<form role="form" method="post" id="doctorregisterForm" class="bv-form">
			<div class="form-group">
				<label>Adı</label>
				<input type="text" class="form-control" name="name" placeholder="Adı" id="name">
			</div>
			<div class="form-group">
				<label>Soyadı</label>
				<input type="text" class="form-control" name="surname" placeholder="Soyadı" id="surname">
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
				<label>Resim Ekle</label><br>
				<input type="file" class="btn btn-default" title="Resim Seç" style="left: -218.156px; top: 4px;">
			</div>
			<div class="form-group">
				<label>Doğum Tarihi</label>
				<input type="text" class="form-control" data-mask="99:99:99" placeholder="Gün:Ay:Yıl">
			</div>
			<div class="form-group">

				<label>Yaşadığı Şehir</label>
				<select  class="form-control">
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