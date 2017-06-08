@extends('doktormaster')


@section('content')


<div class="page-heading">
            		
            		            	</div>
            	<!-- Page Heading End-->
				<!-- Begin Inbox -->
				<div class="widget transparent box-messages">
					<div class="row">
						<div class="col-sm-3 col-sm-offset-9">
						<form class="form-horizontal" role="form">
							<div class="col-sm-9 col-sm-offset-3">
								<div class="form-group form-search search-box has-feedback">
								  
								</div>
							</div>
						</form>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<!-- Sidebar Message -->
							<div class="btn-group new-message-btns stacked">
								<a href="new-message.html" class="btn btn-success btn-lg col-xs-10">Soru & Cevap</a>
								<a class="btn btn-success md-trigger col-xs-2 btn-lg" data-modal="new-message"><i class="icon-pencil"></i></a>
							</div>
							<div class="list-group menu-message">
							  <a href="inbox.html" class="list-group-item active"><i class="icon-inbox"></i> Gelen Sorular <span class="badge pull-right">4</span></a>
							  <a href="#fakelink" class="list-group-item"><i class="icon-pencil"></i> Cevaplanmış Sorular <span class="badge bg-green-1 pull-right">1</span></a>
							  <a href="#fakelink" class="list-group-item"><i class="icon-star"></i> Arşiv  <span class="badge bg-lightblue-1 pull-right">1</span></a>
							  
							  <a href="#fakelink" class="list-group-item"><i class="icon-cup"></i> Çöp Kutusu<span class="badge bg-red-1 pull-right">2</span></a>
							</div>

							
						</div><!-- ENd div .col-md-2 -->

						<div class="col-md-9">
							<div class="mail-list">
							<div class="clearfix"></div>
							
							<!-- Toolbar message -->
							<div class="data-table-toolbar">
								<div class="row">
									<div class="col-sm-8">
										
										<div class="btn-toolbar" role="toolbar">
											<div class="btn-group">
												<div class="rows-check-cont">
													<input type="checkbox" class="rows-check">
												</div>
											</div>
											<div class="btn-group">
												<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tag"></i> <span class="caret"></span></a>
											</div>
											<div class="btn-group hidden-xs">
												<a data-toggle="tooltip" title="Arşiv" class="btn btn-primary"><i class="fa fa-inbox"></i></a>
												
												<a data-toggle="tooltip" title="Çöp Kutusuna Taşı" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
											</div>
											<div class="btn-group hidden-xs">
												<a data-toggle="tooltip" title="Yenile" class="btn btn-primary"><i class="fa fa-undo"></i></a>
											</div>
											
																		
										</div>
									</div>
									
								</div><!-- End div .row -->
							</div><!-- End div .data-table-toolbar -->
							<!-- End toolbar message -->
							
							
							<!-- Message table -->
							<div class="table-responsive">
								<table class="table table-hover table-message">
									<tbody>
										<tr class="unread">
											<td style="width: 20px"><input type="checkbox" class="rows-check"></td>
											<td style="width: 20px;"><a href="javascript:;"><i class="icon-star-1 warning"></i></a></td>
											<td><a href="/Reaply">21.10.2015</a></td>
											<td><a href="/Reaply">Soru Başlığı</a></td>
											<td><i class="icon-attach-3" data-toggle="tooltip" title="Ekli Dosya 2,238KB"></i></td>
											<td>18:30</td>
										</tr>
										
										
										
										
									</tbody>
								</table>
							</div><!-- End div .table-responsive -->
							<!-- End message table -->
							
							<!-- Footer message toolbar -->
							<div class="data-table-toolbar-footer">
								<div class="pull-right">
									<span class="paging-status">20 of 250</span>
									<div class="btn-group">
									  <a class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
									  <a class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
									</div><!-- End div .btn-group -->
								</div><!-- End div .pull-right -->
							</div><!-- End div .data-table-toolbar -->
							<!-- End Footer message toolbar -->
							</div>
						</div><!-- End div .col-md-10 -->
					</div><!-- End div .row -->
				</div><!-- End div .box-info -->
@endsection