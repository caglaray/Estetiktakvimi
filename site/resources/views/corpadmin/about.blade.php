@extends('kurummaster')
@section('content')



<div class="profile-banner" style="background-image: url({{ URL::asset('images/stock/1epgUO0.jpg') }});">
	<div class="col-sm-3 avatar-container">
		<img src="{{ URL::asset('images/users/user-256.jpg') }}" class="img-square profile-avatar" alt="User avatar">
	</div>
	<div class="col-sm-12 profile-actions text-right">


	</div>
</div>
<!--
	{{Auth::user()->id." ".Auth::user()->surname }}-->

	<br/>
	<br/>
	<div class="row">
		<div class="col-sm-3">
			<!-- Begin user profile -->
			<div class="text-center user-profile-2">
				<br><h4> <b>  <?php  echo Auth::user()->name." ".Auth::user()->surname; ?></b></h4>
				@if(Auth::user()->group_id==0)
				Ücretsiz Üyelik
				@else
				Kurumsal Üyelik
				@endif
				<h5>
				</h5>
				<ul class="list-group">

					<li class="list-group-item">
						<span class="badge" title="Ekleyebileceğiniz Doktor">{{Auth::user()->adding }} / {{Auth::user()->doc_capacity }}</span>
						Doktor Sayısı
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
					<li class="active"><a href="#aboutus" data-toggle="tab"><i class="fa fa-pencil"></i> Hakkımızda</a></li>
					<li><a href="#services" data-toggle="tab"><i class="fa fa-user"></i> Hizmetler</a></li>
					<li><a href="#settings" data-toggle="tab"><i class="fa fa-laptop"></i> Hesap Ayarları</a></li>
					<li><a href="#information" data-toggle="tab"><i class="fa fa-envelope"></i> Kullanıcı Bilgileri</a></li>
				</ul>
				<!-- End nav tab -->

				<!-- Tab panes -->
				<div class="tab-content">


					<!-- Tab aboutus -->
					<div class="tab-pane animated active fadeInRight" id="aboutus">
						<div class="user-profile-content">
							<h5><strong>Hakkımızda</strong></h5>

							<input type="text" class="form-control" placeholder="@foreach($about as $abouts){!! $abouts->about !!}@endforeach" disabled="" style="height: 80px;">

							<br>
							<div class="text-right"><button data-modal="md-fall" class="btn btn-default btn-sm md-trigger">Düzenle</button></div>
							<hr />
							<!-- End div .row -->
						</div><!-- End div .user-profile-content -->
					</div><!-- End div .tab-pane -->
					<!-- End Tab aboutus -->

					<!-- Tab services -->
					<div class="tab-pane animated fadeInRight" id="services">
						<div class="user-profile-content">

							<div class="col-sm-6">
								<h5><strong>Hizmetler</strong></h5>
								<table data-sortable="" class="table" data-sortable-initialized="true">
									<thead>
										<tr>

											<th>Hizmetler</th>


											<th data-sortable="false">Sil</th>
										</tr>
									</thead>

									<tbody>
										@foreach($corporationservices as $service)
										<tr>
											<td>{!! $service->name !!}</td>
											<td>
												<div class="btn-group btn-group-xs">
													<a data-toggle="tooltip" href="#" title="Sil" class="btn btn-danger"><i class="icon-cancel-3"></i></a>
												</div>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>

							<div class="col-sm-6">
								<h5><strong>Hizmet Ekle</strong> </h5>
								<p class="help-block">Eklemek İstediğiniz Hizmet Alanı Bulunmuyorsa <br>Lütfen Yöneticinize Başvurun</p>
								<form class="form-horizontal" method="post" role="form">
									<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
									<div class="col-sm-12">
										<select multiple="" name="hizmet" value="" class="form-control">
											@foreach($services as $service)
											<option value="{!! $service->id !!}" name="hizmet" >{!! $service->name !!}</option>
											@endforeach

										</select>
										<br>
										<button class="btn btn-success btn-sm" name="kaydet" value="hizmetekle" type="submit">Kaydet</button>
									</div>
								</form>

							</div>

							<hr />

						</div>

					</div><!-- End div .tab-pane -->
					<!-- End Tab services -->


					<!-- Tab user settings -->
					<div class="tab-pane animated fadeInRight" id="settings">
						<div class="scroll-user-widget">



						</div>
						<div class="col-sm-6">
							<div class="widget-content padding">
								<h5><strong>Hesap Ayarları</strong></h5>
								<div class="col-sm-6">
									<address>
										<strong>Kurum Adı</strong><br>
										<abbr title="Kurum Adı">{{Auth::user()->name }}</abbr>
									</address>
									<address>
										<strong>Adres</strong><br>
										<abbr title="Adres">{{Auth::user()->adress }}</abbr>
									</address>
									<address>
										<strong>Telefon</strong><br>
										<abbr title="Telefon">{{Auth::user()->telephone }}</abbr>
									</address>


								</div>

							</div>
							<!-- End div .scroll-user-widget -->
						</div>
						<div class="col-sm-6">
							<div class="widget-content padding">

								<div class="col-sm-6">
									<address>
										<strong>Üyelik Tipi</strong><br>
										<abbr title="Üyelik Tipi">@if (Auth::user()->group_id==0 )
											Ücretsiz Üyelik
											@else
											Ücretli Üyelik</abbr>@endif
										</address>
										<address>
											<strong>E-mail</strong><br>
											<a href="#">{{Auth::user()->email }}</a>
										</address>
										<address>
											<strong>Logo</strong><br>
											<div class="column">
												<div class="inner">

													<div class="img-wrap">
														<img src="{{ URL::asset('images/users/user-256.jpg') }}" class="mfp-fade">
													</div>

												</div>
											</div>
										</address>




									</div>

								</div>
								<!-- End div .scroll-user-widget -->
							</div>
							<div class="text-right" style="margin-right: 80px;"><button data-modal="md-account" class="btn btn-default btn-sm md-trigger">Düzenle</button></div>
						</div><!-- End div .tab-pane -->
						<!-- End Tab user settings -->

						<!-- Tab user information -->
						<div class="tab-pane animated fadeInRight" id="information">
							<div class="scroll-user-widget">
								<div class="col-sm-6">
									<div id="basic-form">

										<div class="form-group">
											<label>Kullanıcı Adı</label>
											<input type="text" class="form-control" id="" placeholder="{{Auth::user()->username }}" disabled="">
										</div>
										<div class="form-group">
											<label>Şifre</label>
											<input type="password" class="form-control"  placeholder="******" disabled="">
										</div>



									</div>
								</div>
								<div class="col-sm-6">
									<div id="basic-form">
										<form role="form">

											<div class="form-group">
												<label>Şifre</label>
												<input type="password" class="form-control" required="" placeholder="Yeni Şifre">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Şifreyi Tekrar Yazını</label>
												<input type="password" class="form-control" required=""  placeholder="Tekrar Yazın">
											</div>

											<button type="submit" class="btn btn-success">Kaydet</button>
										</form>
									</div>
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



						<form class="form-horizontal" method="post" role="form">
							<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
							<div class="form-group">
								<label>Hakkımızda</label>

								<textarea  name="about" maxlength="250" style="resize: none; height: 180px; width: 500px;">@if($abouts!=NULL){!! $abouts->about !!}@else @endif</textarea>


							</div>
							<p>
								<button type="button" class="btn btn-danger md-close" name="hakkimizdaekle" value="kapat">Kapat</button>
								<button type="submit" class="btn btn-success md-close" name="kaydet" value="hakkmizdaekle">Kaydet</button>
							</p>
						</form>


					</div>
				</div>
			</div>
			<div class="md-modal md-fall md-hide" id="md-account">
				<div class="md-content">
					<div id="basic-form">
						<form class="form-horizontal" enctype="multipart/form-data" method="post" role="form">
							<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
						<div class="form-group">
							<label for="corporationname">Kurum Adı</label>
							<input type="text" class="form-control" name="name" id="" value="<?php echo Auth::user()->name; ?>">
						</div>
						<div class="form-group">
							<label class="control-label">Adres</label>
							<textarea style="max-width: 470px; max-height:80px;" class="form-control" name="adress" placeholder=""><?php echo Auth::user()->adress; ?></textarea>
						</div>
						<div class="form-group">
							<label for="corporationphone">Telefon Numarası</label>
							<input type="phone" class="form-control" id="" name="telephone" placeholder="Telefon Numarası Girin" value="<?php echo Auth::user()->telephone; ?>">
						</div>

						<div class="form-group">
							<input type="file" class="btn btn-default" title="Logo Değiştir" name="logo" placeholder="">
						</div>

						<p style="margin-bottom: 5px;">
							<button type="button" class="btn btn-danger md-close" name="Kapat" value="kapat">Kapat</button>
								<button type="submit" class="btn btn-success md-close" name="kaydet" value="hesapayarlari">Kaydet</button>
						</p>


					</div>
				</div>

			</div>
			<div class="md-overlay">

			</div>
		</div>

		@endsection
