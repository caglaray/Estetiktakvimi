@extends('kurummaster')


@section('content')


<div class="row top-summary">
	<div class="col-lg-3 col-md-6">
		<div class="widget green-1 animated fadeInDown">
			<div class="widget-content padding">
				<div class="widget-icon">
					<i class="icon-users-1"></i>
				</div>
				<div class="text-box">
					<p class="maindata">Toplam <b>Doktor Sayısı</b></p>
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
					<i class="icon-video"></i>
				</div>
				<div class="text-box">
					<p class="maindata">Toplam <b>Video Sayısı</b></p>
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
					<i class="glyphicon glyphicon-comment"></i>
				</div>
				<div class="text-box">
					<p class="maindata">Toplam <b> Makale Sayısı </b></p>
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

				</div>
				<div class="text-box">
					<p class="maindata"><b> Üyelik Tipi</b></p>
					<h2><span class="animate-number" data-value="@if(Auth::user()->group_id==0)
						Ücretsiz Üyelik
						@else
						Ücretli Üyelik
						@endif" data-duration="0">0</span></h2>
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


	<div class="col-lg-6 portlets">
		<div class="row">
			<div class="col-sm-12">
				<div id="todo-app" class="" style="background-color: white">
					<div class="centered">

					<h2>Onay Bekleyen Makaleler</h2>

					</div>
					<div class="widget-content padding-sm">
						<ul class="todo-list">
				
							<li class="low">
								
								<span class="todo-item">Makale Adı</span>
								<span class="todo-options pull-right">
									<a href="#" class="todo-delete"><i class="icon-edit" title="Görüntüle"></i></a>
								</span>
							</li>
								<li class="low">
								
								<span class="todo-item">Makale Adı</span>
								<span class="todo-options pull-right">
									<a href="#" class="todo-delete"><i class="icon-edit" title="Görüntüle"></i></a>
								</span>
							</li>
								<li class="low">
								
								<span class="todo-item">Makale Adı</span>
								<span class="todo-options pull-right">
									<a href="#" class="todo-delete"><i class="icon-edit" title="Görüntüle"></i></a>
								</span>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>
	@endsection