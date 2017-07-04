@extends('kurummaster')


@section('content')

<div class="widget invoice">
					
					<div class="widget-content padding">
					
					
					<div class="bill-to">
						<div class="row">
						<div class="col-sm-12 text-right">
							
							<a href="#" class="btn btn-primary btn-sm invoice-print"><i class="icon-print-2"></i> Yazdır</a>
							<a href="#" class="btn btn-primary btn-sm invoice-save"><i class="glyphicon glyphicon-floppy-save"></i> Kaydet</a>
						</div>
							<div class="col-sm-6">
								<h4><strong></strong> İsmi</h4>
									<address>
									  Şirket Adresi - 1<br>
									  Şirket Adresi - 2<br>
									  <abbr title="Phone">Telefon Numarası</abbr> Telefon Numarası
									</address>
							</div>
							<div class="col-sm-6"><br>
								<small class="text-right">
								<p><strong>Sipariş Tarihi </strong> January 15, 2014</p>
								<p><strong>Sipariş Durumu </strong> <span class="label label-warning">Onay Bekliyor</span></p>
								<p><strong>Sipariş Numarası : </strong> #123456</p>
								</small>
							</div>
						</div>
					</div>

					<br><br>
					
					<div class="table-responsive">
						
						<table class="table table-condensed table-striped">
							<thead>
								<tr>
									<th>Sipariş Adı</th>
									<th>Süre</th>
									<th>Fiyatı</th>
									<th width="100">Toplam</th>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td>Kurumsal Üyelik</td>
									<td>5 Aylık</td>
									<td>&#36;100</td>
									<td>&#36;500.00</td>
								</tr>
								
							
								<tr>
									<td colspan="3" class="text-right"><strong>İndirim</strong></td>
									<td><strong class="text-red-1">&#36;20.00</strong></td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><strong>KDV (18%)</strong></td>
									<td>&#36;3.00</td>
								</tr>
								<tr>
									<td colspan="3" class="text-right"><strong>Toplam</strong></td>
									<td><strong class="text-primary">&#36;18.00</strong></td>
								</tr>
							</tbody>
							
						</table>
						<br><br>
						<h4 class="text-center"><strong>Ödeme İşleminiz Onaylandıktan Sonra İşlemlerinizi Yapabilirsiniz.</strong></h4><br><br>
						
					</div>
					</div>
				</div>


@endsection