@extends('kurummaster')
@section('title','Makale Detay')

@section('content')


<row>
	<div class="col-sm-12 portlets ui-sortable">
		<div class="widget">
			<div class="widget-header ">
				<h2><i class="icon-chart-pie-1"></i> <strong>Makale Bilgileri</strong></h2>
			</div>
			<div class="widget-content padding">
				

				<div class="form-group">
					<label for="input-text" class="col-sm-2 control-label">Makale Adı</label>
					<label for="input-text" style="margin-left:13px;" class="control-label">{!! $Article->title !!}</label>

				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Makale Resim</label>
					<label for="input-text" style="margin-left:13px;" class="control-label">{!! $Article->image  !!}</label>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Durum</label>
					<div class="col-sm-10">
						<label for="input-text" style="margin-left:13px;" class="control-label">{!! $Article->status ? '<span class="label label-success">Açık' : '<span class="label label-danger">Kapalı' !!}</span></label>
					</div>
				</div>


			</br></br>
			
			<div class="form-group">
				<label for="input-text" class="col-sm-2 control-label">Makale Adı</label>
				<label for="input-text" style="margin-left:13px;" class="control-label">{!! $Article->content !!}</label>

			</div>












		</div>

	</div>

</div>


</row>





@endsection