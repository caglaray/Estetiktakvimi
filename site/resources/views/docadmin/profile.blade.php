@extends('doktormaster')
@section('content')



<div class="profile-banner" style="background-image: url({{ URL::asset('images/stock/1epgUO0.jpg') }});">
	<div class="col-sm-3 avatar-container">
		<img src="{{ URL::asset('images/users/user-256.jpg') }}" class="img-square profile-avatar" alt="User avatar">
	</div>
	<div class="col-sm-12 profile-actions text-right">
		<input type="file" class="btn btn-success btn-sm" title="Değiştir">
		<button type="button" class="btn btn-primary btn-sm " title="Kaydet"><i class="fa fa-save"></i> Kaydet</button>

	</div>
</div>



<br/>
<br/>
<div class="row">
	<div class="col-sm-3">
		<!-- Begin user profile -->
		<div class="text-center user-profile-2">
			<br><h4> <b><?php echo Auth::user()->name." ".Auth::user()->surname; ?></b></h4>

			<h5>Doktor Ünvanı</h5>
			<ul class="list-group">

				<li class="list-group-item">
					<span class="badge" title="Cevapladığı Soru Sayısı">101</span>
					Takip Eden
				</li>
				<li class="list-group-item">
					<span class="badge" title="Cevapladığı Soru Sayısı">2</span>
					Cevap Bekleyen Soru
				</li>
				<li class="list-group-item">
					<span class="badge" title="Cevapladığı Soru Sayısı">10</span>
					Cevapladığı Soru
				</li>

			</ul>

			<!-- User button -->
			<div class="user-button">
				<div class="row">
					<p class="help-block"></p>



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
				<li class="active"><a href="#aboutus" data-toggle="tab"><i class="fa fa-pencil"></i> Hakkında</a></li>
				<li><a href="#services" data-toggle="tab"><i class="fa fa-user"></i> Hizmet & Kategori</a></li>
				<li><a href="#settings" data-toggle="tab"><i class="fa fa-laptop"></i> Profil Ayarları</a></li>
				<li><a href="#information" data-toggle="tab"><i class="fa fa-envelope"></i> Kullanıcı Bilgileri</a></li>
			</ul>
			<!-- End nav tab -->

			<!-- Tab panes -->
			<div class="tab-content">


				<!-- Tab aboutus -->
				<div class="tab-pane animated active fadeInRight" id="aboutus">
					<div class="user-profile-content">

						<h5><strong>Hakkında</strong></h5>
						<p style="word-wrap: break-word;">
							<?php echo Auth::user()->about; ?>
						</p>
						<br>
						<div class="text-right"><button data-modal="md-fall" class="btn btn-default btn-sm md-trigger">Düzenle</button></div>
						<hr />
						<h5><strong>Mezun Oluduğu Okullar</strong></h5>
						<div class="text-right"><button data-modal="md-education" class="btn btn-success btn-sm md-trigger">Ekle</button></div>
						<div class="table-responsive">

							@if($schools->isEmpty())
							<p> Kayıt Yok</p>
							@else
							<table data-sortable="" class="table table-hover table-striped" data-sortable-initialized="true">
								<thead>
									<tr>

										<th data-sortable="false">Okul Adı</th>
										<th data-sortable="false">Eğitim Bilgisi</th>
										<th data-sortable="false">Başlangıç Tarihi</th>
										<th data-sortable="false">Mezuniyet Tarihi</th>


										<th data-sortable="false">Seçenekler</th>
									</tr>
								</thead>

								<tbody>
									@foreach($schools as $school)
									<tr>
										<td><strong>{!! $school->name !!}</strong></td>
										<td>{!! $school->education !!}</td>
										<td>{!! $school->start !!}</td>
										<td>{!! $school->finish !!}</td>
										<td class="">
											<form role="form" method="post">
												<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
												<div class="btn-group btn-group-xs">
													<button type="submit" class="btn btn-danger fa fa-close" name="egitimsil" value="{{$school->id}}"></button>
												</div>
											</form>
										</td>
									</tr>
									@endforeach


								</tbody>
							</table>
							@endif
						</div>
						<br>
						<hr>

						<h5><strong>Deneyimler</strong></h5>
						<div class="text-right"><button data-modal="md-experience" class="btn btn-success btn-sm md-trigger">Ekle</button></div>
						<div class="table-responsive">
							<table data-sortable="" class="table table-hover table-striped" data-sortable-initialized="true">
								<thead>
									<tr>

										<th data-sortable="false">Kurum Adı</th>
										<th data-sortable="false"></th>
										<th data-sortable="false">İşe Başlama Tarihi</th>
										<th data-sortable="false">İşten Ayrılma Tarihi</th>


										<th data-sortable="false">Seçenekler</th>
									</tr>
								</thead>

								<tbody>
									@foreach($experiences as $exp)
									<tr>
										<td><strong>{!! $exp->company_name !!}</strong></td><td></td>
										<td>{!! $exp->start !!}</td>
										<td>{!! $exp->finish !!}</td>

										<td class="">
											<form role="form" method="post">
												<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
												<div class="btn-group btn-group-xs">
													<button type="submit" class="btn btn-danger fa fa-close" name="deneyimsil" value="{{$exp->id}}"></button>
												</div>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<br>
						<hr />

						<h5><strong>Yayınlar</strong></h5>
						<div class="text-right"><button data-modal="md-broad" class="btn btn-success btn-sm md-trigger">Ekle</button></div>
						<div class="table-responsive">
							<table data-sortable="" class="table table-hover table-striped" data-sortable-initialized="true">
								<thead>
									<tr>

										<th data-sortable="false">Yayın Adı</th>

										<th data-sortable="false">Yayınlanma Tarihi</th>



										<th data-sortable="false">Seçenekler</th>
									</tr>
								</thead>

								<tbody>
									@foreach($broads as $br)
									<tr>
										<td><strong>{!! $br->broad_name !!}</strong></td>
										<td>{!! $br->start !!}</td>

										<td class="">
											<form role="form" method="post">
												<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
												<div class="btn-group btn-group-xs">
													<button type="submit" class="btn btn-danger fa fa-close" name="yayinsil" value="{{$br->id}}"></button>
												</div>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<br>
						<hr />

						<h5><strong>Ödüller</strong></h5>
						<div class="text-right"><button data-modal="md-winner" class="btn btn-success btn-sm md-trigger">Ekle</button></div>
						<div class="table-responsive">
							<table data-sortable="" class="table table-hover table-striped" data-sortable-initialized="true">
								<thead>
									<tr>
										<th data-sortable="false">Ödül Adı</th>
										<th data-sortable="false">Kazandığı Tarih</th>
										<th data-sortable="false">Seçenekler</th>
									</tr>
								</thead>

								<tbody>
									@foreach($awards as $aw)
									<tr>
										<td><strong>{!! $aw->awards_name !!}</strong></td>
										<td>{!! $aw->start !!}</td>

										<td class="">
											<form role="form" method="post">
												<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
												<div class="btn-group btn-group-xs">
													<button type="submit" class="btn btn-danger fa fa-close" name="odulsil" value="{{$aw->id}}"></button>
												</div>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<br>
						<hr />


						<h5><strong>Sertifikalar</strong></h5>
						<div class="text-right"><button data-modal="md-certificate" class="btn btn-success btn-sm md-trigger">Ekle</button></div>
						<div class="table-responsive">
							<table data-sortable="" class="table table-hover table-striped" data-sortable-initialized="true">
								<thead>
									<tr>

										<th data-sortable="false">Resim</th>
										<th data-sortable="false"></th>
									</tr>
								</thead>

								<tbody>
									@foreach($certificates as $cer)

									<tr>
										<td>
											<div class="column">
												<div class="inner" style="width:80px;">
													<div class="img-wrap" >
														<img src="/images/certificates/{!! $cer->image !!}" height="80px" class="mfp-fade">
													</div>

												</div>
											</div>
										</td>
										<td class="">
											<form role="form" method="post">
												<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
												<div class="btn-group btn-group-xs">
													<button type="submit" class="btn btn-danger fa fa-close" name="sertifikasil" value="{{$cer->id}}"></button>
												</div>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<br>
						<hr />



						<h5><strong>Fotoğraflar</strong></h5>

						@if ($imagecount >= 20)
						<div class="text-right"><button class="btn btn-danger btn-sm">Maksimum Resim</button></div>
						@else

						<div class="text-right"><button data-modal="md-image" class="btn btn-success btn-sm md-trigger">Ekle</button></div>
						@endif
						<div class="table-responsive">
							<table data-sortable="" class="table table-hover table-striped" data-sortable-initialized="true">
								<thead>
									<tr>
										<th data-sortable="false">Resim</th>
										<th data-sortable="false"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach($images as $img)
										<td>
											<div class="column">
												<div class="inner" style="height: 80px; width: 80px;">

													<div class="img-wrap">
														<img src="/images/doctors/{!! $img->images !!}"  class="mfp-fade">
													</div>
												</div>
											</div>
										</td>
										<td>

										</td>

										<td class="">
											<form role="form" method="post">
												<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
												<div class="btn-group btn-group-xs">
													<button type="submit" class="btn btn-danger fa fa-close" name="resimsil" value="{{$img->id}}"></button>
												</div>
											</form>
										</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
						<br>

						<hr>



						<!-- ------------------------------End div .row -->
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
								@foreach($doctorservices as $service)
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
							<form role="form" method="post">
								<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
								<h5><strong>Hizmet Ekle</strong> </h5>
								<p class="help-block">Eklemek İstediğiniz Hizmet Alanı Bulunmuyorsa <br>Lütfen Yöneticinize Başvurun</p>
								<div class="col-sm-12">
									<select multiple="" name="serlist" value="" class="form-control">
										@foreach($services as $service)
										<option value="{!! $service->id !!}" name="serlist">{!! $service->name !!}</option>
										@endforeach
									</select>
									<br>
									<button class="btn btn-success btn-sm" type="submit" name="kaydet" value="hizmetekle">Kaydet</button>
								</form>
							</div>


						</div>


						<div class="col-sm-6">
							<h5><strong>Hizmet Verdiği Kategoriler</strong></h5>
							@foreach($doctorcategories as $categories1)
							<p>{!! $categories1->name !!}</p>
							@endforeach
						</div>
						<div class="col-sm-6">
							<form role="form" method="post">
								<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
								<h5><strong>Kategori Ekle</strong> </h5>
								<p class="help-block"><b>Eklemek İstediğiniz Kategori  Yoksa <br>Lütfen Yöneticinize Başvurun</b></p>
								<div class="col-sm-12">
									<select name="catlist" multiple="" value="" class="form-control">
										@foreach($categories as $categories2)
										<option name="catlist" value="{!! $categories2->id !!}">{!! $categories2->name !!}</option>
										@endforeach
									</select>
									<br>
									<button class="btn btn-success btn-sm" type="submit" name="kaydet" value="kategoriekle">Kaydet</button>
								</form>
							</div>


						</div>
					</div>

				</div><!-- End div .tab-pane -->
				<!-- End Tab services -->


				<!-- Tab user settings -->
				<div class="tab-pane animated fadeInRight" id="settings">
					<div class="scroll-user-widget">



					</div>
					<div class="col-sm-6">
						<div class="widget-content padding">
							@foreach($doctors as $doctor)
							@endforeach

							<h5><strong>Hesap Ayarları</strong></h5>
							<div class="col-sm-6">
								<address>
									<strong>Doktor Adı</strong><br>
									<abbr title="Kurum Adı">{!! $doctor->name !!}</abbr>
								</address>
								<address>
									<strong>Adres</strong><br>
									<abbr title="Adres">{!! $doctor->adress !!}</abbr>
								</address>
								<address>
									<strong>Telefon</strong><br>
									<abbr title="Telefon">{!! $doctor->telephone !!}</abbr>
								</address>


							</div>

						</div>

						<!-- End div .scroll-user-widget -->
					</div>
					<div class="col-sm-6">
						<div class="widget-content padding">

							<div class="col-sm-6">
								<address>
									<strong>Bildiği Diller</strong><br>
									<abbr title="Dil">İngilizce</abbr>
								</address>
								<address>
									<strong>E-mail</strong><br>
									<a href="#">{!! $doctor->email !!}</a>
								</address>
								<address>
									<strong>Profil Resmi</strong><br>
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
									<input type="text" class="form-control" id="" placeholder="Kullanıcı adınız" disabled="">
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
										<label>Kullanıcı Adı</label>
										<input type="text" class="form-control"  placeholder="Kullanıcı adınız" required="" value="Kullanıcı Adınız">
									</div>
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
			<form role="form" style="margin:20px" method="post">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
				<h3>Hakkımızda</h3>
				<div>

					<div class="form-group">
						<label>Hakkımızda</label>

						@if( $doctor->group_id == 1 )
						<textarea class="form-control" name="about" style="height: 140px; resize: none;" placeholder="" maxlength="1000">{!! $doctor->about !!}</textarea>
						@else
						<textarea class="form-control" name="about" style="height: 140px; resize: none;" placeholder="" maxlength="250">{!! $doctor->about !!}</textarea>

						@endif


					</div>
					<p>
						<button class="btn btn-danger md-close">Kapat</button>
						<button class="btn btn-success md-close" type="submit" name="kaydet" value="hakkmizdaekle">Kaydet</button>
					</p>

				</div>

			</form>
		</div>
	</div>
	<div class="md-modal md-fall md-hide" id="md-education">
		<div class="md-content">
			<form role="form" style="margin:20px" method="post">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
				<div class="form-group">
					<h3>Eğitim Bilgisi Ekle</h3>
					<div>
						<div class="form-group">
							<label>Okul Adı</label>
							<input type="text" class="form-control"  name="schoolname" data-bv-field="school">
						</div>
						<div class="form-group">
							<label>Eğitim Bilgisi</label>
							<input type="text" class="form-control" name="schooltype" data-bv-field="school">
						</div>
						<div class="form-group">
							<label>Başlangıç Tarihi </label>
							<input type="text" class="form-control" name="schoolstart" data-bv-field="school" placeholder="1995">
						</div>
						<div class="form-group">
							<label>Bitiş Tarihi </label>
							<input type="text" class="form-control" name="schoolfinish" data-bv-field="school" placeholder="2001">
						</div>
						<p style="padding-bottom:20px">
							<a class="btn btn-danger md-close">Kapat</a>
							<button class="btn btn-success md-close" type="submit" name="kaydet" value="egitimekle">Kaydet</button>
						</p>
					</div>
				</div>
			</form>
		</div>
	</div><!-- la üstte bulunan 3 tane model da eksik var ozaman hiçbirinde sıkıntı yok bunda -->
	<div class="md-modal md-fall md-hide" id="md-experience">
		<div class="md-content">
			<form role="form" style="margin:20px" method="post">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
				<div class="form-group">
					<h3>Deneyim Ekle</h3>
					<div>

						<div class="form-group">
							<label>Deneyim Adı</label>
							<input type="text" class="form-control" name="expname" data-bv-field="school">
						</div>

						<div class="form-group">
							<label>Deneyim Başlangıç Tarihi </label>
							<input type="text" class="form-control" name="expstart" data-bv-field="school" placeholder="1995">
						</div>

						<div class="form-group">
							<label>Deneyim Bitiş Tarihi </label>
							<input type="text" class="form-control" name="expfinish" data-bv-field="school" placeholder="2000">
						</div>


						<p style="padding-bottom:20px">
							<a class="btn btn-danger md-close">Kapat</a>
							<button class="btn btn-success md-close" type="submit" name="kaydet" value="deneyimekle">Kaydet</button>


						</p>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="md-modal md-fall md-hide" id="md-broad">
		<div class="md-content">
			<form role="form" style="margin:20px" method="post">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
				<div class="form-group">
					<h3>Yayın Ekle</h3>
					<div>

						<div class="form-group">
							<label>Yayın Adı</label>
							<input type="text" class="form-control" name="expname" data-bv-field="school">
						</div>

						<div class="form-group">
							<label>Yayın Tarihi </label>
							<input type="text" class="form-control" name="expstart" data-bv-field="school" placeholder="1995">
						</div>


						<p style="padding-bottom:20px">
							<a class="btn btn-danger md-close">Kapat</a>
							<button class="btn btn-success md-close" type="submit" name="kaydet" value="yayinekle">Kaydet</button>


						</p>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="md-modal md-fall md-hide" id="md-winner">
		<div class="md-content">
			<form role="form" style="margin:20px" method="post">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
				<div class="form-group">
					<h3>Ödül Ekle</h3>
					<div>
						<div class="form-group">
							<label>Ödül Adı</label>
							<input type="text" class="form-control" name="odulname" data-bv-field="school">
						</div>

						<div class="form-group">
							<label>Kazanma Tarihi </label>
							<input type="text" class="form-control" name="odulstart" data-bv-field="school" placeholder="1995">
						</div>

						<p style="padding-bottom:20px">
							<a class="btn btn-danger md-close">Kapat</a>
							<button class="btn btn-success md-close" type="submit" name="kaydet" value="odulekle">Kaydet</button>
						</p>
					</div>
				</div>
			</form>
		</div>
	</div>




	<div class="md-modal md-fall md-hide" id="md-certificate">
		<div class="md-content">
			<form role="form" enctype="multipart/form-data" style="margin:20px" method="post">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
				<div class="form-group">
					<h3>Sertifika Ekle</h3>
					<div>
						<div class="form-group">

							<input type="file" name="sertifikaresim" class="btn btn-default" title="Resim Seç" style="left: -160px; top: 3px;">

						</div>
						<p style="padding-bottom:20px">
							<a class="btn btn-danger md-close">Kapat</a>
							<button class="btn btn-success md-close" type="submit" name="kaydet" value="sertifikaekle">Kaydet</button>
						</p>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div class="md-modal md-fall md-hide" id="md-image">
		<div class="md-content">
			<form role="form" enctype="multipart/form-data" style="margin:20px" method="post">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
				<div class="form-group">
					<h3>Resim Ekle</h3>
					<div>
						<div class="form-group">
							<input type="file" name="doktorresim" class="btn btn-default" title="Resim Seç" style="left: -160px; top: 3px;">
						</div>
						<p style="padding-bottom:20px">
							<a class="btn btn-danger md-close">Kapat</a>
							<button class="btn btn-success md-close" type="submit" name="kaydet" value="resimekle">Kaydet</button>
						</p>
					</div>
				</div>
			</form>
		</div>
	</div>


	<div class="md-modal md-fall md-hide" id="md-publish">
		<div class="md-content">
			<div class="form-group">
				<h3>Deneyim Ekle</h3>
				<div>
					<div class="form-group">
						<label>Kurum Adı</label>
						<input type="text" class="form-control" name="school" data-bv-field="school">
					</div>
					<div class="form-group">
						<label>Derecesi</label>
						<select class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="form-group">
						<label>Başlangıç Tarihi </label>
						<input type="text" class="form-control" name="school" data-bv-field="school" placeholder="1995">
					</div>
					<div class="form-group">
						<label>Bitiş Tarihi </label>
						<input type="text" class="form-control" name="school" data-bv-field="school" placeholder="2001">
					</div>
					<p>
						<button class="btn btn-danger md-close">Kapat</button>
						<button class="btn btn-success md-close">Kaydet</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="md-modal md-fall md-hide" id="md-account">
		<div class="md-content">
			<div id="basic-form">
				<form role="form">
					<div class="form-group">
						<label for="corporationname">Kurum Adı</label>
						<input type="text" class="form-control" id="" value="Kurum Adınız">
					</div>
					<div class="form-group">
						<label class="control-label">Adres</label>
						<textarea style="max-width: 470px; max-height:80px;" class="form-control" name="" placeholder="Adresinizi Giriniz">Adresiniz</textarea>
					</div>
					<div class="form-group">
						<label for="corporationphone">Telefon Numarası</label>
						<input type="phone" class="form-control" id="" placeholder="Telefon Numarası Girin" value="0541 280 10 30">
					</div>

					<div class="form-group">
						<input type="file" class="btn btn-default" title="Logo Değiştir">

					</div>

					<p style="margin-bottom: 5px;">
						<button class="btn btn-danger md-close">Kapat</button>
						<button class="btn btn-success md-close">Kaydet</button>
					</p>

				</form>
			</div>
		</div>

	</div>
	<div class="md-overlay"></div>


</div>


@endsection
