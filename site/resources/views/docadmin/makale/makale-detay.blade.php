@extends('doktormaster')
@section('title','Makale Detay')

@section('content')


<row>
<div class="col-sm-12 portlets ui-sortable">
						<div class="widget">
							<div class="widget-header ">
								<h2><i class="icon-chart-pie-1"></i> <strong>{!! $Article->title !!}</strong></h2>
								
							</div>
							<div class="widget-content padding">
								{!! $Article->content !!}
							</div>
						</div>
					</div>
</row>





@endsection