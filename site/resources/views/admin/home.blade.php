@extends('adminmaster')


@section('content')

<div class="row top-summary">
					<div class="col-lg-3 col-md-6">
						<div class="widget green-1 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="icon-users-1"></i>
								</div>
								<div class="text-box">
									<p class="maindata">Toplam <b>Kurum</b></p>
									<h2><span class="animate-number" data-value="25153" data-duration="3000">0</span></h2>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="widget-footer">
								
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="widget darkblue-2 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="icon-user"></i>
								</div>
								<div class="text-box">
									<p class="maindata">Toplam <b>Doktor Sayısı</b></p>
									<h2><span class="animate-number" data-value="1000" data-duration="3000">0</span></h2>

									<div class="clearfix"></div>
								</div>
							</div>
							<div class="widget-footer">
								<div class="row">
									
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="widget orange-4 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="fa fa-dollar"></i>
								</div>
								<div class="text-box">
									<p class="maindata"><b>Kazanç </b></p>
									<h2><span class="animate-number" data-value="1000" data-duration="3000">0</span></h2>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="widget-footer">
								<div class="row">
									
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="widget lightblue-1 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="glyphicon glyphicon-comment"></i>
								</div>
								<div class="text-box">
									<p class="maindata">Cevaplanmış<b> Soru</b></p>
									<h2><span class="animate-number" data-value="18648" data-duration="3000">0</span></h2>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="widget-footer">
								<div class="row">
									
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

				</div>
					<div class="row">
					
					<div class="col-lg-8 portlets">
						<div class="widget">
						
							<div class="widget-content">
								<h2 style="margin-left: 20px;"> <strong>Onay Bekleyenler</strong></h2>
								<div class="clearfix"></div>
								<div id="sales-report" class="collapse in hidden-xs">
									<div class="table-responsive">
									<table data-sortable class="table table-striped">
										<thead>
											<tr>
											<th>Kullanıcı Adı</th>
											<th width="150">Üyelik Tipi</th>
											<th width="100">Durum</th>
											<th width="150">Tarih</th>
											</tr>
										</thead>
										<tbody>
											<tr>
                                           
                                            <td><a href="#">Johndoe</a></td>
                                             <td>Bireysel Üyelik</td>
                                            <td><span class="label label-warning">Onay Bekliyor</span></td>
                                            <td>24/15/2017</td>
                                          </tr>

										
											

										</tbody>
									</table>
									
									</div>

								</div>

							</div>

						</div>
					</div>
					
				</div>

@endsection