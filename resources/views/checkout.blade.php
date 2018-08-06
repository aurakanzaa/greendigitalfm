@extends('layouts.layoutfix')

@section('content')
<!-- breadcrumb-area start -->
		<div class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Checkout</h1>
							<ul>
								<li><a href="{{url('/homepage')}}">home</a> <span class="divider">|</span></li>
								<li>Checkout</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area end -->
		<br>	
		<!-- checkout-area start -->
		<div class="checkout-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">						
						<div class="your-order">
								<h3>Your order</h3>
								<div class="your-order-table table-responsive">
									<table>
										<thead>
											<tr>
												<th class="product-name"><b>Product</b></th>
												<th class="product-total">Total</th>
											</tr>							
										</thead>
										<tbody>
												@if(count($datakeranjang) >0)
												@foreach($datakeranjang as $data)
											<tr class="cart_item">
												<td class="product-name">
													{{$data->produk->NAMA_SAYUR}} <strong class="product-quantity"> × {{$data->JUMLAH_ITEM}}</strong>
												</td>
												<td class="product-total">
													<span class="amount">{{$data->TOTAL_BAYAR}}</span>
												</td>
											</tr>
											@endforeach
												@endif
										</tbody>
										<tfoot>
											<tr class="cart-subtotal">
												<th> <b> Cart Subtotal </b> </th>
												<td><span class="amount">{{$totalharga}}</span></td>
											</tr>
											<tr class="shipping">
												<th>Shipping Address </th>
												<td>
													<ul>
														<form action="{{route('create.transaction')}}" method="POST" id="check" >
															@csrf
															<p class="form-row">
																</form>
																<textarea name="alamat_kirim"
   																rows="4" cols="50" form="check"> </textarea>	
															</p>
													</ul>
												</td>
											</tr>
											<tr class="order-total">
												<th>Order Total</th>
											<td><strong><span class="amount">{{ $totalharga }}</span></strong>
												</td>
											</tr>								
										</tfoot>
									</table>
								</div>
								<div class="payment-method">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									  <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
										  <h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											  BCA
											</a>
										  </h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										  <div class="panel-body">
											  <div class="text-center">
												<img src="images/bca.png" width="250px" height="250px" class="rounded float-left">
											  </div>
											  <br>
											<p> No. Rek : <b> 08192839381219 </b></p>
											<p> A/N 	: <b> ASDF </b></p>
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
										  <h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											  BNI
											</a>
										  </h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										  <div class="panel-body">
											  <div class="text-center">
												<img src="images/bni.png" width="250px" height="250px" class="rounded float-left">
											  </div>
											  <br>
											 <p> No. Rek : <b> 08192839381219 </b></p>
											<p> A/N 	: <b> ASDF </b></p>
										  </div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
										  <h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											  Mandiri
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										  <div class="panel-body">
											  <div class="text-center">
												<img src="images/mandiri.png" width="250px" height="250px" class="rounded float-left">
											  </div>
											  <br>
											<p> No. Rek : <b> 08192839381219 </b></p>
											<p> A/N 	: <b> ASDF </b></p>
										  </div>
										</div>
									  </div>
									</div>								
									<div class="text-center">
										<button style="width:200px; height: 70px; text: center;" onclick="event.preventDefault(); 
																			document.getElementById('check').submit();">
											Place Order
										</button> 
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- checkout-area end -->	
@endsection