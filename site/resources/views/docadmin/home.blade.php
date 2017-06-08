@extends('doktormaster')
@section('title','Ana Sayfa')

@section('content')

<div class="row top-summary">
					<div class="col-lg-3 col-md-6">
						<div class="widget green-1 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="icon-globe-inv"></i>
								</div>
								<div class="text-box">
									<p class="maindata">Toplam <b>Ziyaretçi</b></p>
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
									<i class="icon-bag"></i>
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
									<p class="maindata"><b>Kayıtlı Kurum </b></p>
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
									<i class="fa fa-users"></i>
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
								<h2 style="margin-left: 20px;"> <strong>Soru İşlemleri</strong></h2>
								<div class="clearfix"></div>
								<div id="sales-report" class="collapse in hidden-xs">
									<div class="table-responsive">
									<table data-sortable class="table table-striped">
										<thead>
											<tr><th>Kullanıcı Adı</th><th width="100">Durum</th><th width="150">Tarih</th></tr>
										</thead>
										<tbody>
											<tr>
                                           
                                            <td><a href="#">John Doe</a></td>
                                            <td><span class="label label-primary">Cevaplandı</span></td>
                                            <td>24/15/2017</td>
                                          </tr>

										
											

										</tbody>
									</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 portlets">
						<div class="row">
							<div class="col-sm-12">
								<div id="todo-app" class="widget">
									
									
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div id="notes-app" class="widget">
									<div class="notes-line"></div>
									<div class="widget-header centered transparent">
										<div class="left-btn btn-group"><a class="btn btn-sm btn-primary add-note"><i class="fa fa-plus"></i></a><a class="btn btn-sm btn-primary back-note-list"><i class="icon-align-justify"></i></a></div>
										<h2>Not Defteri</h2>
										<div class="additional-btn">
											<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
											<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
											<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
											<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
											<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
										</div>
									</div>
									<div class="widget-content padding-sm">
										<div id="notes-list">
											<div class="scroller">
												<ul class="list-unstyled">
												</ul>
											</div>
										</div>
										<div id="note-data">
											<form>
												<textarea class="form-control" id="note-text" placeholder="Your note..."></textarea>
											</form>
										</div>
										<div class="status-indicator">Saved</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection