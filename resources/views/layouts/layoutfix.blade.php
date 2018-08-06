<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Green Digital Fresh Market!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- google fonts  -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,700,300,800' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{asset('relaxshop/css/bootstrap.min.css')}}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{asset('relaxshop/css/animate.css')}}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('relaxshop/css/jquery-ui.min.css')}}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('relaxshop/css/meanmenu.min.css')}}">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('relaxshop/css/owl.carousel.css')}}">
		<!-- nivo-slider css -->
        <link rel="stylesheet" href="{{asset('relaxshop/lib/css/nivo-slider.css')}}">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('relaxshop/css/font-awesome.min.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('relaxshop/style.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('relaxshop/css/responsive.css')}}">
		<!-- modernizr js -->
        <script src="{{asset('relaxshop/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		
		<!-- header start -->
        <header class="header-pos">
			<!-- header-bottom-area start -->
			<div class="header-bottom-area">
				<div class="container">
					<div class="inner-container">
						<div class="row">
							<div class="col-md-2 col-sm-4 col-xs-5">
								<div class="logo">
								<a href="{{ url('/homepage')}}"><img src="{{asset('relaxshop/img/5.png')}}" alt="" /></a>
								</div>
							</div>
							<div class="col-md-8 hidden-xs hidden-sm">
								<div class="main-menu">
									<nav>
										<ul>
											<li><a href="{{ url('/homepage')}}">home</a></li>
											<li><a href="{{ route('get.produk')}}">products</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-md-2 col-sm-8 col-xs-7 header-right">
								<div class="my-cart">
									<div class="total-cart">
										<a href="cart.html">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<ul>
										<li>
											<a class="cart-button" href="{{ url('/shopcart')}}">view cart</a>
											<a class="checkout" href="{{route('get.checkout')}}">checkout</a>
											<a class="checkout" href="{{url('/transaction')}}">Order Details</a>
										</li>
									</ul>
								</div>
								<div class="user-meta">
									<a href="#"><i class="fa fa-user"></i></a>
									<ul>
										@guest
											<li><a href="{{ url('/login')}}">Sign in</a></li>
											<li><a href="{{ url('/login')}}">Sign up</a></li>
										@else
											<li><a href="{{ route('toko.dashboard')}}" class="icon fa-user"> &nbsp; {{ Auth::user()->username }} </a></li>
											<li><a href="{{ route('logout')}}"
												onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();"> Log Out</a></li>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        	{{ csrf_field() }}
                                    </form>
										@endguest
									</ul>								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-bottom-area end -->
			<!-- mobile-menu-area start -->
			<div class="mobile-menu-area visible-xs visible-sm">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.html">Home</a>
											<ul>
												<li><a href="index.html">Homepage Version 1</a></li>
												<li><a href="index-2.html">Homepage Version 2</a></li>
												<li><a href="index-3.html">Homepage Version 3</a></li>
											</ul>
										</li>
										<li><a href="about.html">About</a></li>
										<li><a href="blog.html">blog</a></li>
										<li><a href="shop.html">Shop</a>
											<ul>
												<li><a href="#">WOMEN CLOTH</a>
													<ul>
														<li><a href="shop.html">casual shirt</a></li>
														<li><a href="shop.html">rikke t-shirt</a></li>
														<li><a href="shop.html">mia top </a></li>
														<li><a href="shop.html">muscle tee</a></li>
													</ul>
												</li>
												<li><a href="#">MEN CLOTH</a>
													<ul>
														<li><a href="shop.html">casual shirt</a></li>
														<li><a href="shop.html">rikke t-shirt</a></li>
														<li><a href="shop.html">mia top </a></li>
														<li><a href="shop.html">muscle tee</a></li>
													</ul>
												</li>
												<li><a href="#">WOMEN JEWELRY</a>
													<ul>
														<li><a href="shop.html">necklace </a></li>
														<li><a href="shop.html">chunky short striped</a></li>
														<li><a href="shop.html">samhar cuff </a></li>
														<li><a href="shop.html">nail set</a></li>
													</ul>
												</li>											
											</ul>
										</li>
										<li><a href="shop.html">Footwear </a></li>
										<li><a href="#">Pages</a>
											<ul>
												<li><a href="about.html">about</a></li>
												<li><a href="blog.html">blog</a></li>
												<li><a href="blog-2-column.html">blog 2 column</a></li>
												<li><a href="blog-full-width.html">blog full width</a></li>
												<li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
												<li><a href="single-blog.html">single blog</a></li>
												<li><a href="single-blog-video.html">single blog video</a></li>
												<li><a href="cart.html">shopping cart</a></li>
												<li><a href="checkout.html">checkout</a></li>
												<li><a href="wishlist.html">wishlist</a></li>
												<li><a href="contact.html">contact</a></li>
												<li><a href="login.html">login</a></li>
												<li><a href="shop.html">shop</a></li>
												<li><a href="product-details.html">product details</a></li>
												<li><a href="shop-full-width.html">shop full width</a></li>
												<li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
												<li><a href="404.html">404 error</a></li>
											</ul>
										</li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</nav>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area end -->				
		</header>
        <!-- header end -->
        @yield('content')

        		
		<!-- footer start -->
		<footer>
			<!-- footer-bottom-area start -->
			<div class="footer-bottom-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="copyright">
								<p>Copyright © <a href="#">GDFM PSI</a>. All Rights Reserved</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="payment-img">
								<img src="img/payment.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom-area end -->			
		</footer>
		<!-- footer end -->
		
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


		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{asset('relaxshop/js/vendor/jquery-1.12.0.min.js')}}"></script>
		<!-- bootstrap js -->
        <script src="{{asset('relaxshop/js/bootstrap.min.js')}}"></script>
		<!-- owl.carousel js -->
        <script src="{{asset('relaxshop/js/owl.carousel.min.js')}}"></script>
		<!-- meanmenu js -->
        <script src="{{asset('relaxshop/js/jquery.meanmenu.js')}}"></script>
		<!-- jquery-ui js -->
        <script src="{{asset('relaxshop/js/jquery-ui.min.js')}}"></script>
		<!-- nivo.slider js -->
		<script src="{{asset('relaxshop/lib/js/jquery.nivo.slider.pack.js')}}"></script>		
		<script src="{{asset('relaxshop/lib/js/nivo-active.js')}}"></script>		
		<!-- wow js -->
		<script src="{{asset('relaxshop/js/wow.min.js')}}"></script>
		<script>
			$(".zoom").elevateZoom();
		</script>
		<!-- plugins js -->
        <script src="{{asset('relaxshop/js/plugins.js')}}"></script>
		<!-- main js -->
        <script src="{{asset('relaxshop/js/main.js')}}"></script>
    </body>
</html>