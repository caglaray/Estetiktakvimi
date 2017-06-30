@extends('kurummaster')
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
			<br><h4> <b>
			@foreach($doctors as $doctor)
			{!! $doctor->name !!} {!! $doctor->surname !!}
			@endforeach
		</b></h4>

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
					<p>
						@foreach($doctors as $doctor)
						{!! $doctor->about !!}
						@endforeach


					</p>
					<br>
					<div class="text-right"><button data-modal="md-fall" class="btn btn-default btn-sm md-trigger">Düzenle</button>
					</div>
					<hr />
					<h5><strong>Mezun Oluduğu Okullar  </strong></h5>
					<div class="text-right"><button data-modal="md-education" class="btn btn-success btn-sm md-trigger">Ekle</button></div>
					<div class="table-responsive">
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
									<td><strong>  {!! $school->name !!}</strong></td>
									<td>{!! $school->education !!}</td>
									<td>{!! $school->start !!}</td>
									<td>{!! $school->finish !!}</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>
								@endforeach


							</tbody>
						</table>
					</div>
					<br>
					<hr />
					<h5><strong>Deneyimler</strong></h5>
					<div class="text-right"><button data-modal="md-publish" class="btn btn-success btn-sm md-trigger">Ekle</button></div>
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

								<tr>
									<td><strong>John Doe</strong></td>
									<td></td><td>1985</td><td>1992</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>


								<tr>
									<td><strong>John Doe</strong></td>
									<td></td><td>1985</td><td>1992</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td><strong>John Doe</strong></td>
									<td></td><td>1985</td><td>1992</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td><strong>John Doe</strong></td>
									<td></td><td>1985</td><td>1992</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>

							</tbody>
						</table>
					</div>
					<br>
					<hr />
					<h5><strong>Yayınlar</strong></h5>
					<div class="text-right"><button data-modal="md-experience" class="btn btn-success btn-sm md-trigger">Ekle</button></div>
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
								<tr>
									<td><strong>John Doe</strong></td>
									<td>1985</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td><strong>John Doe</strong></td>
									<td>1985</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td><strong>John Doe</strong></td>
									<td>1985</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td><strong>John Doe</strong></td>
									<td>1985</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>

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
								<tr>
									<td><strong>John Doe</strong></td>
									<td>1985</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td><strong>John Doe</strong></td>
									<td>1985</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td><strong>John Doe</strong></td>
									<td>1985</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td><strong>John Doe</strong></td>
									<td>1985</td>

									<td>
										<div class="btn-group btn-group-xs">
											<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
										</div>
									</td>
								</tr>

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
								<tr>
									<td>
										<div class="column">
											<div class="inner" style="height: 80px; width: 80px;">

												<div class="img-wrap">
													<img src="{{ URL::asset('images/users/user-256.jpg') }}"  class="mfp-fade">
												</div>

											</div>
										</div></td>
										<td></td>

										<td>
											<div class="btn-group btn-group-xs">
												<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
												<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="column">
												<div class="inner" style="height: 80px; width: 80px;">

													<div class="img-wrap">
														<img src="{{ URL::asset('images/users/user-256.jpg') }}"  class="mfp-fade">
													</div>

												</div>
											</div></td>
											<td></td>

											<td>
												<div class="btn-group btn-group-xs">
													<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
													<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="column">
													<div class="inner" style="height: 80px; width: 80px;">

														<div class="img-wrap">
															<img src="{{ URL::asset('images/users/user-256.jpg') }}"  class="mfp-fade">
														</div>

													</div>
												</div></td>
												<td></td>

												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
														<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td><div class="column">
													<div class="inner" style="height: 80px; width: 80px;">

														<div class="img-wrap">
															<img src="{{ URL::asset('images/users/user-256.jpg') }}"  class="mfp-fade">
														</div>

													</div>
												</div>
											</td>
											<td></td>

											<td>
												<div class="btn-group btn-group-xs">
													<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
													<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
												</div>
											</td>
										</tr>

									</tbody>
								</table>
							</div>
							<br>
							<hr />
							<h5><strong>Fotoğraflar</strong></h5>
							<div class="text-right"><button data-modal="md-image" class="btn btn-success btn-sm md-trigger">Ekle</button></div>
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
											<td>
												<div class="column">
													<div class="inner" style="height: 80px; width: 80px;">

														<div class="img-wrap">
															<img src="{{ URL::asset('images/users/user-256.jpg') }}"  class="mfp-fade">
														</div>

													</div>
												</div></td>
												<td></td>

												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
														<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="column">
														<div class="inner" style="height: 80px; width: 80px;">

															<div class="img-wrap">
																<img src="{{ URL::asset('images/users/user-256.jpg') }}"  class="mfp-fade">
															</div>

														</div>
													</div></td>
													<td></td>

													<td>
														<div class="btn-group btn-group-xs">
															<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
															<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="column">
															<div class="inner" style="height: 80px; width: 80px;">

																<div class="img-wrap">
																	<img src="{{ URL::asset('images/users/user-256.jpg') }}"  class="mfp-fade">
																</div>

															</div>
														</div></td>
														<td></td>

														<td>
															<div class="btn-group btn-group-xs">
																<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
																<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td><div class="column">
															<div class="inner" style="height: 80px; width: 80px;">

																<div class="img-wrap">
																	<img src="{{ URL::asset('images/users/user-256.jpg') }}"  class="mfp-fade">
																</div>

															</div>
														</div>
													</td>
													<td></td>

													<td>
														<div class="btn-group btn-group-xs">
															<a data-toggle="tooltip" title="Düzenle" class="btn btn-warning"><i class="fa fa-edit"></i></a>
															<a data-toggle="tooltip" title="Sil" class="btn btn-danger"><i class="fa fa-close"></i></a>
														</div>
													</td>
												</tr>

											</tbody>
										</table>
									</div>
									<br>








									<!-- End div .row -->
								</div><!-- End div .user-profile-content -->
							</div><!-- End div .tab-pane -->
							<!-- End Tab aboutus -->

							<!-- Tab services -->
							<div class="tab-pane animated fadeInRight" id="services">
								<div class="user-profile-content">

									<div class="col-sm-6">
										<h5><strong>Hizmetler</strong></h5>
										@foreach($doctorservices as $service)
										<p>{!! $service->name !!}</p>
										@endforeach
									</div>

									<div class="col-sm-6">
										<h5><strong>Hizmet Ekle</strong> </h5>
										<p class="help-block">Eklemek İstediğiniz Hizmet Alanı Bulunmuyorsa <br>Lütfen Yöneticinize Başvurun</p>
										<div class="col-sm-12">
											<select multiple="" class="form-control">
												@foreach($services as $service)
												<option>{!! $service->name !!}</option>
												@endforeach
											</select>
											<br>
											<button class="btn btn-success btn-sm" type="button">Kaydet</button>
										</div>


									</div>


									<div class="col-sm-6">
										<h5><strong>Hizmet Verdiği Kategoriler</strong></h5>
										@foreach($doctorcategories as $categories1)
										<p>{!! $categories1->name !!}</p>
										@endforeach
									</div>
									<div class="col-sm-6">
										<h5><strong>Kategori Ekle</strong> </h5>
										<p class="help-block"><b>Eklemek İstediğiniz Kategori  Yoksa <br>Lütfen Yöneticinize Başvurun</b></p>
										<div class="col-sm-12">
											<select multiple="" class="form-control">
												@foreach($categories as $categories2)
												<option>{!! $categories2->name !!}</option>
												@endforeach
											</select>
											<br>
											<button class="btn btn-success btn-sm" type="button">Kaydet</button>
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

							@foreach($doctors as $doctor)
									<div class="widget-content padding">

										<h5><strong>Hesap Ayarları</strong></h5>
										<div class="col-sm-6">
											<address>
												<strong>Doktor Adı</strong><br>
												<abbr title="Doktor Adı">{!! $doctor->name !!}</abbr>
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
									@endforeach
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
						<h3>Doktor Hakkında</h3>
						<div>

							<form class="form-horizontal" method="post" role="form">
								<input type="hidden" name="_token" value="{!! csrf_token() !!}"  />
								<label>Hakkında</label>
								<textarea class="form-control" name="about" style="height: 140px; resize: none;" maxlength="250"></textarea>
							</div>
							<p>
								<button type="button" class="btn btn-danger md-close" name="kapat" value="kapat">Kapat</button>
								<button type="submit" class="btn btn-success md-close" name="kaydet" value="hakkindaekle">Kaydet</button>
							</p>

						</div>
					</div>
				</div>
				<div class="md-modal md-fall md-hide" id="md-education">
					<div class="md-content"><div class="form-group">
						<h3>Eğitim Bilgisi Ekle</h3>
						<div>
							<div class="form-group">
								<label>Okul Adı</label>
								<input type="text" class="form-control" name="school" data-bv-field="school">
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
			<div class="md-modal md-fall md-hide" id="md-experience">
				<div class="md-content"><div class="form-group">
					<h3>Yayın Ekle</h3>
					<div>
						<div class="form-group">
							<label>Yayın Adı</label>
							<input type="text" class="form-control" name="school" data-bv-field="school">
						</div>

						<div class="form-group">
							<label>Yayınlanma Tarihi </label>
							<input type="text" class="form-control" name="school" data-bv-field="school" placeholder="1995">
						</div>

						<p>
							<button class="btn btn-danger md-close">Kapat</button>
							<button class="btn btn-success md-close">Kaydet</button>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="md-modal md-fall md-hide" id="md-winner">
			<div class="md-content"><div class="form-group">
				<h3>Ödül Ekle</h3>
				<div>
					<div class="form-group">
						<label>Ödül Adı</label>
						<input type="text" class="form-control" name="school" data-bv-field="school">
					</div>

					<div class="form-group">
						<label>Kazanma Tarihi </label>
						<input type="text" class="form-control" name="school" data-bv-field="school" placeholder="1995">
					</div>

					<p>
						<button class="btn btn-danger md-close">Kapat</button>
						<button class="btn btn-success md-close">Kaydet</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="md-modal md-fall md-hide" id="md-certificate">
		<div class="md-content"><div class="form-group">
			<h3>Sertifika Ekle</h3>
			<div>
				<div class="form-group">
					<input type="file" class="btn btn-default" title="Resim Seç" style="left: -160px; top: 3px;">

				</div>



				<p>
					<button class="btn btn-danger md-close">Kapat</button>
					<button class="btn btn-success md-close">Kaydet</button>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="md-modal md-fall md-hide" id="md-image">
	<div class="md-content"><div class="form-group">
		<h3>Resim Ekle</h3>
		<div>
			<div class="form-group">
				<input type="file" class="btn btn-default" title="Resim Seç" style="left: -160px; top: 3px;">

			</div>



			<p>
				<button class="btn btn-danger md-close">Kapat</button>
				<button class="btn btn-success md-close">Kaydet</button>
			</p>
		</div>
	</div>
</div>
</div>
<div class="md-modal md-fall md-hide" id="md-publish">
	<div class="md-content"><div class="form-group">
		<h3>Deneyim Ekle</h3>
		<div>
			<div class="form-group">
				<label>Kurum Adı</label>
				<input type="text" class="form-control" name="school" data-bv-field="school">
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
<div class="md-overlay">

</div>
</div>

@endsection
