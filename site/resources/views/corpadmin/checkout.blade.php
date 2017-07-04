@extends('kurummaster')


@section('content')
<div class="container"></div>,<div class="container">

<div class="stepwizard col-md-offset-3">
	<div class="stepwizard-row setup-panel">
		<div class="stepwizard-step">
			<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
			<p>1. Adım</p>
		</div>
		<div class="stepwizard-step">
			<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
			<p>2. Adım</p>
		</div>
		
	</div>
</div>
<form class="form-horizontal" method="post" role="form">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
	<div class="row setup-content" id="step-1">
		<div class="col-xs-6 col-md-offset-3">
			<div class="col-md-12">
				<h3> Kullanıcı Bilgileri</h3>
				<div class="form-group">
					<label for="corporationsname">Kurum Adı</label> 
					<input type="text" id="corporationsname" value="<?php  echo Auth::user()->name ?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="corporationsadress">Kurum Adresi</label>
					<input type="text" id="corporationsadress" value="<?php  echo Auth::user()->adress ?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="corporationsphone">Telefon Numarası</label>
					<input type="text" id="corporationsphone" value="<?php  echo Auth::user()->telephone ?>" class="form-control" required="">
				</div>
				<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Sonraki Adım</button>
			</div>
		</div>
	</div>
	<div class="row setup-content" id="step-2">
		<div class="col-xs-6 col-md-offset-3">
			<div class="col-md-12">
				<h3>Üyelik Seçimi</h3>
				<div class="form-group">

					<label class="col-sm-5 control-label">Üyelik Süresini Seçiniz!</label>
					<div class="col-sm-10">

						<select name="productdetail" value="" class="form-control selectpicker">@foreach($product as $productdetail)
							<option value="{!! $productdetail->price !!}">{!! $productdetail->name !!} {!! $productdetail->price !!} TL</option>
							
							@endforeach
						</select>
					</div>

				</div>
				<div class="form-group">

					<label class="col-sm-6 control-label">Eklemek İstediğiniz Doktor Sayısı</label>
					<div class="col-sm-10">

						<select name="productoptions" value=""  class="form-control selectpicker">@foreach($product_options as $productoptions)
							<option value="{!! $productoptions->price !!}">{!! $productoptions->name !!} Doktor İçin Ücret: {!! $productoptions->price !!} TL</option>
							
							@endforeach
						</select>
					</div>

				</div>	
				<button class="btn btn-primary prevBtn btn-lg pull-left" type="button" style="margin-top: 20px;">Önceki Adım</button>
				<button class="btn btn-success btn-lg pull-right" type="submit" style="margin-top: 20px;">Siparişi Göster</button>

				
			</div>
		</div>
	</div>
	
</form>

</div>
@endsection