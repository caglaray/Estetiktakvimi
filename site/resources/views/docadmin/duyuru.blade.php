@extends('doktormaster')
@section('title','Duyuru Yap')

@section('content')

<div class="row">
  <div class="widget">
  					<div class="widget-header transparent">
  						<h2><strong>Duyuru</strong> Yolla</h2>

  					</div>
  					<div class="widget-content padding">
  						<form class="form-horizontal" role="form">

  						  <div class="form-group">
  							<label class="col-sm-2 control-label">Gönderen :</label>
  							<div class="col-sm-10">
  							  <p class="form-control-static">{{Auth::user()->email}}</p>
  							</div>
  						  </div>

  						  <div class="form-group">
  							<label class="col-sm-2 control-label">Duyuru Metni :</label>
  							<div class="col-sm-10">
  							  <textarea class="summernote"></textarea>
  							</div>
  						  </div>
  						</form>
  					</div>

  				</div>

@endsection
