@extends('doktormaster')
@section('title','Ana Sayfa')

@section('content')
<div class="page-heading">
            		<h1><i class='fa fa-envelope'></i> E-mail</h1>
            		            	</div>
            	<!-- Page Heading End-->
				
				<!-- Begin Inbox -->
				<div class="box-messages">
					<div class="row">
						<div class="col-md-3">
							<!-- Sidebar Message -->

							<div class="btn-group new-message-btns stacked">
								<a href="/doktor/sorucevap/soru" class="btn btn-primary btn-lg btn-block text-left"><i class="icon-left-open-1"></i> Back to Inbox</a>
							</div>
							<div class="list-group menu-message">
							  <a href="/Mesajlar" class="list-group-item"><i class="icon-inbox"></i> Inbox <span class="badge pull-right">4</span></a>
							  <a href="#fakelink" class="list-group-item"><i class="icon-pencil"></i> Draft <span class="badge bg-green-1 pull-right">1</span></a>
							  <a href="#fakelink" class="list-group-item"><i class="icon-star"></i> Important <span class="badge bg-red-1 pull-right">2</span></a>
							  <a href="#fakelink" class="list-group-item"><i class="icon-export"></i> Sent</a>
							  <a href="#fakelink" class="list-group-item"><i class="icon-cup"></i> Trash <span class="badge bg-lightblue-1 pull-right">1</span></a>
							</div>

							<div class="list-group menu-folders">
							  <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-red-1"></i> Work</a>
							  <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-green-1"></i> Social</a>
							  <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-blue-1"></i> Friends</a>
							  <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-orange-3"></i> Private</a>
							  <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-lightblue-2"></i> Family</a>
							</div>
						</div><!-- ENd div .col-md-2 -->
						
						
						<div class="col-md-9">
							<div class="widget">
								<div class="col-sm-12">
									<!-- Begin read message -->
									<!-- Message -->
									<div class="row">
										<div class="col-sm-8">
											<h3 class="semibold">{!! $questions->title !!}</h3>
										</div>
										
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="mail-sender-details">
												<img src="images/users/chat/19.jpg" class="img-circle sender-photo"> <small><b>Hasta Adı Soyadı</b> <span class="text-muted">Kullanıcı Adı</span><br><span class="text-muted"> 17,Eylül 2017 22:15</span></small>
											</div>
										</div>
										<div class="col-sm-6 text-right">
											<!--<div class="btn-group spaced">
												<a class="btn btn-danger"><i class="icon-reply-1"></i> Reply</a>
												<a class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
												    <span class="caret"></span>
												    <span class="sr-only">Toggle Dropdown</span>
												</a>
												
											</div>-->
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 mail-body">
											<hr>
											{!! $questions->message !!}
                                            </div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<hr>
											<div class="gallery-wrap">
												<div class="column">
													<div class="inner">
														<a title="Image title here" href="images/big/img005.jpg" class="zooming">
														<div class="img-wrap">
															<img class="mfp-fade" title="Image title here" alt="Image gallery" src="images/small/img005_small.jpg">
														</div>
														<div class="caption-static">
															website-banner-1.jpg (1.264KB)
														</div>
														</a>
													</div>
												</div>
												<div class="column">
													<div class="inner">
														<a title="Image title here" href="images/big/img002.jpg" class="zooming">
														<div class="img-wrap">
															<img class="mfp-fade" title="Image title here" alt="Image gallery" src="images/small/img002_small.jpg">
														</div>
														<div class="caption-static">
															website-banner-2.jpg (2.033KB)
														</div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="widget lightblue-2">
								<div class="widget-header transparent">
									<h2>Soruyu Cevapla</h2>
									<div class="additional-btn">
										<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									</div>
								</div>
								<div class="widget-content padding">
									<textarea class="summernote-small form-control"></textarea>
								</div><input type="button" value="Cevapla" class="btn btn-danger" style="float: right; margin-right: 20px; margin-bottom: 10px;">
							</div>
						</div><!-- End div .col-md-10 --></div><!-- End div .row -->
					
				</div>
@endsection