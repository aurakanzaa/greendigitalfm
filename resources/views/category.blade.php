@extends('layouts.layoutfix')

@section('content')
    		<!-- breadcrumb-area start -->
		<div class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Category</h1>
							<ul>
								<li><a href="{{url('/homepage')}}">home</a> <span class="divider">|</span></li>
								<li><a href="#">Category</a></li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area end -->
		<!-- shop-area start -->
		<div class="shop-area shop-full">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="shop-content">					
							<h3>Category</h3>
                            <div class="clear"></div>
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home">
									<div class="row">
										@if( count($details) >0)
                            				@foreach($details as $data)
										<!-- single-product start -->
										<div class="col-md-4 col-sm-4">
											<div class="single-product">
												<div class="product-img">
													<a href="{{ route('get.single', ['id_sayur' => $data->ID_SAYUR])}}">
                                                        <?php $urlgambar = $data->GAMBAR_SAYUR ?>
														<img src="{{asset($urlgambar)}}" alt="" />
														<img class="secondary-img" src="{{asset($urlgambar)}}" alt="" />
													</a>
													<span class="tag-line">new</span>
												</div>
												<div class="product-content">
                                                <a href="{{ route('get.single', ['id_sayur' => $data->ID_SAYUR])}}"><h3> {{$data->NAMA_SAYUR}} </h3></a> 
													<div class="price">
                                                    <span>{{ $data->HARGA_SAYUR}}</span>
													</div>
												</div>
											</div>
										</div>
										<!-- single-product end -->	
                                			@endforeach
                                		@endif
                                    </div>
                                </div>
                                    {{-- <div role="tabpanel" class="tab-pane" id="profile">
									<div class="row shop-list">
										<!-- single-product start -->
										<div class="col-md-12">
											<div class="single-product">
												<div class="product-img">
													<a href="single-product.html">
														<img src="relaxshop/img/product/2.jpg" alt="" />
														<img class="secondary-img" src="relaxshop/img/product/11.jpg" alt="" />
													</a>
													<span class="tag-line">new</span>
												</div>
												<div class="product-content">
													<h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
													<div class="price">
														<span>$80.00</span>
														<span class="old">$90.11</span>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
													<div class="product-action">
														<div class="button-top">
															<a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
															<a href="#" ><i class="fa fa-heart"></i></a>
														</div>
														<div class="button-cart">
															<button><i class="fa fa-shopping-cart"></i> add to cart</button>
														</div>
													</div>													
												</div>
											</div>
										</div>
										<!-- single-product end -->	
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
        </div>
		</div>
        <!-- shop-area end -->
        <!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="modal-product">
								<div class="product-images">
									<div class="main-image images">
										<img alt="" src="img/product/13.jpg">
									</div>
								</div><!-- .product-images -->
								
								<div class="product-info">
									<h1>Diam quis cursus</h1>
									<div class="price-box">
										<p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
									</div>
									<a href="shop.html" class="see-all">See all features</a>
									<div class="quick-add-to-cart">
										<form method="post" class="cart">
											<div class="numbers-row">
												<input type="number" id="french-hens" value="3">
											</div>
											<button class="single_add_to_cart_button" type="submit">Add to cart</button>
										</form>
									</div>
									<div class="quick-desc">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
									</div>
									<div class="social-sharing">
										<div class="widget widget_socialsharing_widget">
											<h3 class="widget-title-modal">Share this product</h3>
											<ul class="social-icons">
												<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
												<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
												<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
												<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
												<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- .product-info -->
							</div><!-- .modal-product -->
						</div><!-- .modal-body -->
					</div><!-- .modal-content -->
				</div><!-- .modal-dialog -->
			</div>
			<!-- END Modal -->
		</div>
		<!-- END QUICKVIEW PRODUCT -->
@endsection