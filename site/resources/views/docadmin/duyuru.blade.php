@extends('doktormaster')
@section('title','Duyuru Yap')

@section('content')

<div class="row">
  <div class="widget">
  					<div class="widget-header transparent">
  						<h2><strong>Form</strong> Element</h2>
  						<div class="additional-btn">
  							<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
  							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
  							<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
  						</div>
  					</div>
  					<div class="widget-content padding">
  						<form class="form-horizontal" role="form">
  						
  						  <div class="form-group">
  							<label class="col-sm-2 control-label">Static Control</label>
  							<div class="col-sm-10">
  							  <p class="form-control-static">email@example.com</p>
  							</div>
  						  </div>
  						  <div class="form-group">
  							<label class="col-sm-2 control-label">Radio</label>
  							<div class="col-sm-10">
  								<div class="radio iradio">
  								  <label>
  									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
  									Option one is this and that&mdash;be sure to include why it's great
  								  </label>
  								</div>
  								<div class="radio iradio">
  								  <label>
  									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
  									Option two can be something else and selecting it will deselect option one
  								  </label>
  								</div>
  							</div>
  						  </div>


  						  <div class="form-group">
  							<label class="col-sm-2 control-label">WYSWYG</label>
  							<div class="col-sm-10">
  							  <textarea class="summernote"></textarea>
  							</div>
  						  </div>
  						</form>
  					</div>

  				</div>

@endsection
