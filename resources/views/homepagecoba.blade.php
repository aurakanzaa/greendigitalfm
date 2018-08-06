@extends('layouts.layoutfix') @section('content')
<!-- home slider start -->
<div class="slider-container">
	<!-- Slider Image -->
	<div id="mainSlider" class="nivoSlider slider-image">
		<img src="relaxshop/img/1080.jpg" alt="main slider" title="#htmlcaption1" />
		<img src="relaxshop/img/hd2.jpg" alt="main slider" title="#htmlcaption2" />
	</div>
	<!-- Slider Caption 1 -->
	<div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
		<div class="slider-progress"></div>
		<div class="slide1-text">
			<div class="middle-text">
				<div class="cap-dec wow bounceInDown" data-wow-duration="0.9s" data-wow-delay="0s">
					<h3>Best Deals!</h3>
				</div>
				<div class="cap-title wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
					<h1>The Freshest Veggies today
						<br> just for you!</h1>
				</div>
				<div class="cap-readmore wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
					<a href="{{route('get.produk')}}">shop now</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider Caption 2 -->
	<div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
		<div class="slider-progress"></div>
		<div class="slide1-text">
			<div class="middle-text">
				<div class="cap-dec wow bounceIn" data-wow-duration="0.7s" data-wow-delay="0s">
					<h3>Best in Town!</h3>
				</div>
				<div class="cap-title wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
					<h1>We serve only the top quality
						<br> veggies for you!</h1>
				</div>
				<div class="cap-readmore wow bounceIn" data-wow-duration="1.1s" data-wow-delay=".5s">
					<a href="{{route('get.produk')}}">shop now</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- home slider end -->
<!-- banner-area start -->
<div class="banner-area pad-60">
	<div class="container">
		<div class="row">
			<div class="section-title">
				<h2>Categories</h2>
				<div class="title-icon">
					<span>
						<i class="fa fa-angle-left"></i>
						<i class="fa fa-angle-right"></i>
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="single-banner">
					<a href="{{ route('get.categories')}}" onclick="event.preventDefault();
                                                     document.getElementById('categories-id').submit();">
						<img src="relaxshop/img/asparagus.jpg" alt="" />
						<div class="banner-caption">
							<h2>Sayuran
								<span>Batang</span>
							</h2>
							<p>Sayuran Batang sehat banget loh sini dong</p>
						</div>
					</a>
					<form id="categories-id" action="{{ route('get.categories')}}" name="get_category" method="POST" style="display: none;">
						@csrf
						<input type="number" name="id_category" style="display: none;" value="3">
					</form>
				</div>
				<div class="single-banner marg-20">
					<a href="{{ route('get.categories')}}" onclick="event.preventDefault();
                                                     document.getElementById('categories-id3').submit();">
						<img src="relaxshop/img/brokoli.jpg" alt="" />
						<div class="banner-caption">
							<h2>Sayuran
								<span>Bunga</span>
							</h2>
							<p>MANTABBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB</p>
						</div>
					</a>
					<form id="categories-id3" action="{{ route('get.categories')}}" name="get_category" method="POST" style="display: none;">
						@csrf
						<input type="number" name="id_category" style="display: none;" value="5">
					</form>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-banner">
					<a href="{{ route('get.categories')}}" onclick="event.preventDefault();
                                                     document.getElementById('categories-id2').submit();">
						<img src="relaxshop/img/buncis.jpg" alt="" />
						<div class="banner-caption">
							<h2>Sayuran
								<span> Buah</span>
							</h2>
							<p>ENak banget loh ini</p>
						</div>
					</a>
					<form id="categories-id2" action="{{ route('get.categories')}}" name="get_category" method="POST" style="display: none;">
						@csrf
						<input type="number" name="id_category" style="display: none;" value="4">
					</form>
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-banner">
					<a href="{{ route('get.categories')}}" onclick="event.preventDefault();
                                                     document.getElementById('categories-id4').submit();">
						<img src="relaxshop/img/kentang.jpg" alt="" />
						<div class="banner-caption">
							<h2>Sayuran
								<span>Akar</span>
							</h2>
							<p>HEUHEUHEUHEUHEUHEU</p>
						</div>
					</a>
					<form id="categories-id4" action="{{ route('get.categories')}}" name="get_category" method="POST" style="display: none;">
						@csrf
						<input type="number" name="id_category" style="display: none;" value="2">
					</form>
				</div>
				<div class="single-banner marg-20">
					<a href="{{ route('get.categories')}}" onclick="event.preventDefault();
                                                     document.getElementById('categories-id5').submit();">
						<img src="relaxshop/img/kemangi.jpg" alt="" />
						<div class="banner-caption">
							<h2>
								<span> Sayuran Daun</span>
							</h2>
							<p>asdjasfjaslfjfalfjflsajfljfsa</p>
						</div>
					</a>
					<form id="categories-id5" action="{{ route('get.categories')}}" name="get_category" method="POST" style="display: none;">
						@csrf
						<input type="number" name="id_category" style="display: none;" value="1">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- banner-area end -->
<!-- featured-area start -->
<div class="featured-area pad-60">
	<div class="container">
		<div class="row">
			<div class="section-title">
				<h2>Most Popular product</h2>
				<div class="title-icon">
					<span>
						<i class="fa fa-angle-left"></i>
						<i class="fa fa-angle-right"></i>
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="product-tab">

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<div class="row">
								<div class="product-curosel">
									<!-- single-product start -->
									@if(count($products) >0) @foreach($products as $data)
									<div class="col-md-12">
										<div class="single-product">
											<div class="product-img">
												<a href="single-product.html">
													<img src="{{ $data->GAMBAR_SAYUR }}" alt="" />
													<img class="secondary-img" src="{{ $data->GAMBAR_SAYUR }}" alt="" />
												</a>
												<span class="tag-line">new</span>
											</div>
											<div class="product-content">
												<a href="{{ route('get.single', ['id_sayur' => $data->ID_SAYUR])}}">
													{{ $data->NAMA_SAYUR}}
												</a>
												<div class="price">
													<span>IDR {{ $data->HARGA_SAYUR}}</span>
												</div>
											</div>
										</div>
									</div>
									@endforeach @endif
									<!-- single-product end -->
								</div>
							</div>
						</div>
						<br>
						<br>
@endsection