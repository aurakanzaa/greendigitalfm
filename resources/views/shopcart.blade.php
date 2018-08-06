@extends('layouts.layoutfix')

@section('content')
		<!-- breadcrumb-area start -->
		<div class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Shopping Cart</h1>
							<ul>
								<li><a href="{{url('/homepage')}}">home</a> <span class="divider">|</span></li>
								<li>Shopping cart</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area end -->
		<!-- cart-main-area start -->
		<div class="cart-main-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<form action="#">				
							<div class="table-content table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-thumbnail">Image</th>
											<th class="product-name">Product</th>
											<th class="product-price">Price</th>
											<th class="product-quantity">Quantity</th>
											<th class="product-subtotal">Total</th>
											<th class="product-remove">Remove</th>
										</tr>
									</thead>
									<tbody>
										@if(count($datakeranjang) >0)
											@foreach($datakeranjang as $data)
										<tr>
											<td class="product-thumbnail"><a href="#"><img src="img/cart/2.jpg" alt="" /></a></td>
											<td class="product-name"><a href="#">{{ $data->produk->NAMA_SAYUR}}</a></td>
											<td class="product-price"><span class="amount">{{ $data->produk->HARGA_SAYUR}}</span></td>
											<td class="product-quantity">
												<form id="item-qty" action="{{ route('update.qty')}}" name="item_qty" method="POST">
												@csrf
													<input type="number" name="id_sayur" style="display: none;" value="{{ $data->produk->ID_SAYUR}}">
													<input type="number" name="item_qty" value="{{ $data->JUMLAH_ITEM}}" />
												</form>
											</td>
											<td class="product-subtotal">{{ $data->TOTAL_BAYAR }}</td>
											<td class="product-remove">
												<a href="{{ route('delete.item', ['id_sayur' => $data->produk->ID_SAYUR])}}">
													<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
											@endforeach
										@endif
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-md-8 col-sm-7 col-xs-12">
									<div class="buttons-cart">
										<a href="{{ route('update.qty')}}" onclick="event.preventDefault();
                                                     document.getElementById('item-qty').submit();">
										Update Cart
										</a>
										<a href="{{url('/homepage')}}">Continue Shopping</a>
									</div>
								</div>
								<div class="col-md-4 col-sm-5 col-xs-12">
									<div class="cart_totals">
										<h2>Cart Totals</h2>
										<table>
											<tbody>
												<tr class="cart-subtotal">
													<th> Subtotal </th>
													<td><span class="amount"> IDR {{ $totalharga }} </span></td>
												</tr>
												<tr class="order-total">
													<th>Total</th>
													<td>
														<strong><span class="amount"> IDR {{ $totalharga }} </span></strong>
													</td>
												</tr>
											</tbody>
										</table>
										<div class="wc-proceed-to-checkout">
											<a href="{{ route('get.checkout')}}">Proceed to Checkout</a>
										</div>
									</div>
								</div>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
		<!-- cart-main-area end -->	
		<!-- brand-area start -->
		<div class="brand-area">
			<div class="container">
				<div class="brand-inner-container pad-60">
					<div class="row">
						<div class="brand-curosel">
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/1.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/1.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/1.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/1.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/1.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/1.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/1.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/1.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/1.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- brand-area end -->
@endsection