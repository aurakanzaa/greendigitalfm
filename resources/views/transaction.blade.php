@extends('layouts.layoutfix')

@section('content')
<!-- breadcrumb-area start -->
		<div class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Your Transaction</h1>
							<ul>
								<li><a href="{{url('/homepage')}}">home</a> <span class="divider">|</span></li>
								<li>Details</li>
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
                            <h3>Your order ID : </h3>
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
                                            @foreach($datakeranjang as $datak)
											<tr class="cart_item">
												<td class="product-name">
													{{$datak->produk->NAMA_SAYUR}} <strong class="product-quantity"> × {{$datak->JUMLAH_ITEM}}</strong>
												</td>
												<td class="product-total">
													<span class="amount">{{$datak->TOTAL_BAYAR}}</span>
												</td>
                                            </tr>
                                            @endforeach
                                            @endif
										</tbody>
										<tfoot>
											<tr class="cart-subtotal">
												<th> <b> Cart Subtotal </b> </th>
                                            <td><span class="amount"> {{ $totalharga }}</span></td>
											</tr>
											<tr class="shipping">
												<th>Shipping Address </th>
												<td>
													<ul>
                                                        @foreach($datadetailpembelian as $datadp)
                                                    <p> {{$datadp->ALAMAT_KIRIM}}</p>
                                                        @endforeach
													</ul>
												</td>
											</tr>
											<tr class="shipping">
												<th>No. Order Go-Send </th>
												<td>
													<ul>
                                                        @foreach($datadetailpembelian as $datadp)
                                                    <p> {{$datadp->NO_GOSEND}}</p>
                                                        @endforeach
													</ul>
												</td>
											</tr>
											<tr class="order-total">
												<th>Order Total</th>
                                            <td><strong><span class="amount"> {{ $totalharga }}</span></strong>
												</td>
                                            </tr>
                                            <tr class="cart-subtotal">
												<th> 
													<b> Transaction Status </b> 
													<p>(0 = unfinished, 1 = finished)</p>
												</th>
                                                    <td><p> {{$status}} </p> </td>
											</tr>
											
										</tfoot>
									</table>
									<div class="wc-proceed-to-checkout text-center">
									<a href="{{route('get.payment')}}"> Payment Verification </a>
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