@extends('kurummaster')
@section('content')



<div class="profile-banner" style="background-image: url({{ URL::asset('images/stock/1epgUO0.jpg') }});">
	<div class="col-sm-3 avatar-container">
		<img src="{{ URL::asset('images/users/user-256.jpg') }}" class="img-square profile-avatar" alt="User avatar">
	</div>
	<div class="col-sm-12 profile-actions text-right">
		<input type="file" class="btn btn-success btn-sm" title="Değiştir"> 

	</div>
</div>



<br/>
<br/>
<div class="row">
	<div class="col-sm-3">
		<!-- Begin user profile -->
		<div class="text-center user-profile-2">
			<br><h4> <b>Kurum Adı</b></h4>

			<h5>Administrator</h5>
			<ul class="list-group">
				<li class="list-group-item">
					<span class="badge">10</span>
					Eklenebilecek Doktor Sayısı
				</li>
				<li class="list-group-item">
					<span class="badge">10</span>
					Eklenen Doktor Sayısı
				</li>

			</ul>

			<!-- User button -->
			<div class="user-button">
				<div class="row">
					<p class="help-block"></p>
					<button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-okey"></i>Daha Fazla Doktor Eklemek İstermisiniz? </button>


				</div>
			</div><!-- End div .user-button -->
		</div><!-- End div .box-info -->
		<!-- Begin user profile -->
	</div><!-- End div .col-sm-4 -->
	<br>
	<div class="col-sm-9">
		<div class="widget widget-tabbed">
			<!-- Nav tab -->
			<ul class="nav nav-tabs nav-justified">
				<li class="active"><a href="#my-timeline" data-toggle="tab"><i class="fa fa-pencil"></i> Hakkımızda</a></li>
				<li><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> Hizmetler</a></li>
				<li><a href="#user-activities" data-toggle="tab"><i class="fa fa-laptop"></i> Hesap Ayarları</a></li>
				<li><a href="#mymessage" data-toggle="tab"><i class="fa fa-envelope"></i> Konum Bilgileri</a></li>
			</ul>
			<!-- End nav tab -->

			<!-- Tab panes -->
			<div class="tab-content">


				<!-- Tab timeline -->
				<div class="tab-pane animated active fadeInRight" id="my-timeline">
					<div class="user-profile-content">
						<h5><strong>Hakkımızda</strong></h5>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
						</p>
						<hr />
						<button data-modal="md-fall" class="btn btn-default btn-sm md-trigger">Düzenle</button>

						<!-- End div .row -->
					</div><!-- End div .user-profile-content -->
				</div><!-- End div .tab-pane -->
				<!-- End Tab timeline -->

				<!-- Tab about -->
				<div class="tab-pane animated fadeInRight" id="about">
					<div class="user-profile-content">

						<div class="col-sm-6">
							<h5><strong>Hizmetler</strong></h5>
							<p>UI Design</p>
							<p>Clean and Modern Web Design</p>
							<p>PHP and MySQL Programming</p>
							<p>Vector Design</p>
						</div>

						<div class="col-sm-6">
							<h5><strong>Hizmet Ekle</strong> </h5>
							<p class="help-block">Eklemek İstediğiniz Hizmet Alanı Bulunmuyorsa <br>Lütfen Yöneticinize Başvurun</p>
							<div class="col-sm-12">
								<select multiple="" class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
								<br>
								<button class="btn btn-success btn-sm" type="button">Kaydet</button>
								</div>


							</div>

							<hr />

						</div>

					</div><!-- End div .tab-pane -->
					<!-- End Tab about -->


					<!-- Tab user activities -->
					<div class="tab-pane animated fadeInRight" id="user-activities">
						<div class="scroll-user-widget">



						</div>
						<div class="widget-content padding">
							<h4><strong>Hesap Ayarları</strong></h4>                            
							<div id="basic-form">
								<form role="form">
									<div class="form-group">
										<label for="corporationname">Kurum Adı</label>
										<input type="text" class="form-control" id="" value="Kurum Adınız">
									</div>
									<div class="form-group">
										<label class="control-label">Adres</label>
										<textarea style="max-width: 764px; max-height:80px;" class="form-control" name="" placeholder="Adresinizi Giriniz">Adresiniz</textarea>
									</div>
									<div class="form-group">
										<label for="corporationphone">Telefon Numarası</label>
										<input type="phone" class="form-control" id="" placeholder="Telefon Numarası Girin" value="0541 280 10 30">
									</div>

									<div class="form-group">
										<input type="file" class="btn btn-default" title="Logo Değiştir">

									</div>
									<div class="col-sm-6" style="float: left;">
										<button type="submit" class="btn btn-default">Kaydet</button></div>
									</form>
								</div>

							</div><!-- End div .scroll-user-widget -->
						</div><!-- End div .tab-pane -->
						<!-- End Tab user activities -->

						<!-- Tab user messages -->
						<div class="tab-pane animated fadeInRight" id="mymessage">
							<div class="scroll-user-widget">
								<div id="gmap-6" style="height:400px">
								</div>
							</div><!-- End div .scroll-user-widget -->
						</div><!-- End div .tab-pane -->
						<!-- End Tab user messages -->
					</div><!-- End div .tab-content -->
				</div><!-- End div .box-info -->
			</div>
			

			<div class="md-modal md-fall md-hide" id="md-fall">
				<div class="md-content">
					<h3>Hakkımızda</h3>
					<div>
						<form>
							<div class="form-group">
								<label>Hakkımızda</label>
								<textarea class="form-control" name="Contactmessage" style="height: 140px; resize: none;" maxlength="250"></textarea>
							</div>
							<p>
								<button class="btn btn-danger md-close">Kapat</button>
								<button class="btn btn-success md-close">Kaydet</button>
							</p>
						</form>
					</div>
				</div>



				@endsection