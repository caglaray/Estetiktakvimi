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
					<h4><strong> {{Auth::user()->name}}</strong></h4>
					<address>
						{{Auth::user()->adress}}<br>

						<abbr title="Telefon">{{Auth::user()->telephone}}</abbr> 
					</address>
				</div>
				<div class="col-sm-6"><br>
					<small class="text-right">
		<p><strong>Sipariş Tarihi </strong> January 15, 2014</p>
		<p><strong>Sipariş Durumu </strong> <span class="label label-warning">Onay Bekliyor</span></p>
		<p><strong>Sipariş Numarası : </strong> </p>
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
						<th>Üyelik Süresi</th>
						<th>Fiyatı</th>
						<th width="100">Toplam</th>
					</tr>
				</thead>

				<tbody>
					@foreach($productprice as $pro_price)
					@foreach($optionprice as $option)
					<tr>
						<td>{!! $option->name !!} Ekleme Seçeneği</td>
						<td>{!! $pro_price->name !!}</td>
						<td>...</td>
						<td>{!! $option->price+$pro_price->price !!}TL</td>
					</tr>
					

				
					<tr>
						<td colspan="3" class="text-right"><strong >KDV (18%)</strong></td>
						<td ><strong class="text-primary">{!!((($option->price+$pro_price->price)*18)/100)!!}</strong></td>
					</tr>
					<tr>
						<td colspan="3" class="text-right"><strong>Toplam</strong></td>
						<td><strong class="text-danger">{!! $option->price+$pro_price->price+((($option->price+$pro_price->price)*18)/100) !!}TL</strong></td>
					</tr>
					@endforeach
					@endforeach
				</tbody>

			</table>
			<br><br>
			<h4 class="text-center"><strong>Ödeme İşleminiz Onaylandıktan Sonra İşlemlerinizi Yapabilirsiniz.</strong></h4><br><br>

		</div>
	</div>
</div>

@endsection