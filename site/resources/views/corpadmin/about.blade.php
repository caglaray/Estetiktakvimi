@extends('kurummaster')
@section('content')




<div class="widget widget-tabbed">
	<!-- Nav tab -->
	
	<div class="user-profile-content">
		<h5><strong>Hakkımızda</strong></h5>
		<p>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
		</p>
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info" title="Düzenle">
			Düzenle</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					
					<!-- Modal content-->
					<div class="modal-content">
						
						<div class="modal-body">
							<p>  </p><div class="form-group">
							<label>Hakkımızda</label>
							<textarea class="form-control" name="Contactmessage" style="height: 140px; resize: none;" maxlength="250"></textarea>
						</div>
						<button type="submit" class="btn btn-success">Güncelle</button> 
						<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button><p></p>
					</div>
					<div class="modal-footer">
						
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
	

	
	
	<hr>
	
</div>


@endsection