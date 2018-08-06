@extends('layouts.layoutfix') @section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-list">
					<h1>Product Details</h1>
					<ul>
						<li>
							<a href="{{ url('/homepage')}}">home</a>
							<span class="divider">|</span>
						</li>
						<li>Product details</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb-area end -->
<!-- shop-area start -->
<div class="shop-area">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					@if(count($single)>0) @foreach($single as $data)
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div class="single-pro-tab-content">
							<!-- Tab panes -->
							<div class="tab-content">
								<?php $urlgambar = $data->GAMBAR_SAYUR ?>
								<div role="tabpanel" class="tab-pane active" id="home">
									<a href="#">
										<img class="zoom" src="{{asset($urlgambar)}}" data-zoom-image="{{asset($urlgambar)}}" alt="" />
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12 shop-list shop-details">
						<div class="product-content">
							<h3>
								<a href="single-product.html"> {{ $data->NAMA_SAYUR}} </a>
							</h3>
							<div class="price">
								<span> {{$data->HARGA_SAYUR}} </span>
							</div>
							<p>{{$data->DETAIL_SAYUR}}</p>
							<div class="product-action">
								<div class="cart-plus">
									<form method="POST" action="{{ route('add.cart', ['id_sayur' => $data->ID_SAYUR])}}" id="add-cart">
										@csrf
										<div class="cart-plus-minus">
											<input type="number" name="qty" value="1" />
										</div>
								</div>
								<div class="button-top">
								</div>
								<div class="button-cart">
									<button onclick="event.preventDefault(); 
																			document.getElementById('add-cart').submit();">
										<i class="fa fa-shopping-cart"></i> add to cart</button>
									<input type="submit" style="display: none;"></input>
									</form>
								</div>
							</div>
						</div>
						@endforeach @endif
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<!-- shop-area end -->
	@endsection