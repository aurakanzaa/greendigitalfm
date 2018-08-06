@extends('layouts.layoutfix') @section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>Profile Seller</h1>
                    <ul>
                        <li>
                            <a href="{{url('/homepage')}}">home</a>
                            <span class="divider">|</span>
                        </li>
                        <li>Profile Seller</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
@if($toko == null)
<!-- about-area start -->
<div class="about-area pad-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-img">
                    <img src="img/about.jpg" alt="" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="about-text">
                    <h2>Create</h2>
                    <div class="col-md-6">
                        <div class="login-content login-margin">
                            <form method="POST" action="{{url('toko/regis')}}">
                                @csrf
                                <label>Shop Name</label>
                                <input id="namatoko" type="text" class="form-control{{ $errors->has('namatoko') ? ' is-invalid' : '' }}" name="namatoko"
                                    value="{{ old('namatoko') }}" required autofocus> @if ($errors->has('namatoko'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('namatoko') }}</strong>
                                </span>
                                @endif

                                <label>Shop Address</label>
                                <input id="shopaddress" type="text" class="form-control{{ $errors->has('shopaddress') ? ' is-invalid' : '' }}" name="shopaddress"
                                    value="{{ old('shopaddress') }}" required> @if ($errors->has('shopaddress'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('shopaddress') }}</strong>
                                </span>
                                @endif

                                <label>Province</label>
                                <input id="province" type="text" class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}" name="province"
                                    value="{{ old('province') }}" required> @if ($errors->has('province'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('province') }}</strong>
                                </span>
                                @endif

                                <label>City</label>
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}"
                                    required> @if ($errors->has('city'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                                @endif

                                <label>Postal Code</label>
                                <input id="postalcode" type="number" class="form-control{{ $errors->has('postalcode') ? ' is-invalid' : '' }}" name="postalcode"
                                    value="{{ old('postalcode') }}" required> @if ($errors->has('postalcode'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('postalcode') }}</strong>
                                </span>
                                @endif

                                <label>No. Rek Toko</label>
                                <input id="norek" type="number" class="form-control{{ $errors->has('norek') ? ' is-invalid' : '' }}" name="norek" required> @if ($errors->has('norek'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('norek') }}</strong>
                                </span>
                                @endif

                                <input class="login-sub" type="submit" value="Submit" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login-area end -->
    </div>
</div>
</div>
</div>
</div>
<!-- about-area end -->
@else
<!-- about-area start -->
<div class="about-area pad-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-img">
                    <img src="img/about.jpg" alt="" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="about-text">

                    <h2>Your Shop's Profile.</h2>
                    <!-- Nav tabs -->
                    <ul class="pro-details-tab" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab-desc" aria-controls="tab-desc" role="tab" data-toggle="tab">Shop's Profile</a>
                        </li>
                        <li role="presentation">
                            <a href="#page-info" aria-controls="page-info" role="tab" data-toggle="tab">Edit Shop's Profile</a>
                        </li>
                        <li role="presentation">
                            <a href="#page-comments" aria-controls="page-comments" role="tab" data-toggle="tab">Add Items</a>
                        </li>
                        <li role="presentation">
                            <a href="#page-comments2" aria-controls="page-comments" role="tab" data-toggle="tab">Order Verification</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab-desc">
                            <div class="product-tab-desc">

                                <h4>
                                    <b>{{ $toko->NAMA_TOKO}}</b>
                                </h4>
                                <ul id="product-desc-t">
                                    <li>ID Toko : {{ $toko->ID_TOKO}}</li>
                                    <li>Alamat Toko : {{ $toko->ALAMAT_TOKO}}</li>
                                    <li>Provinsi : {{ $toko->PROVINSI_TOKO}}</li>
                                    <li>Kota : {{ $toko->KOTA_TOKO}}</li>
                                    <li>Kode Pos : {{ $toko->KODEPOS_TOKO}}</li>
                                    <li>No. Rek : {{ $toko->NO_REK_TOKO}}</li>
                                </ul>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="page-info">
                            <div class="product-tab-desc">
                                <form method="POST" action="{{ route('update.toko')}}">
                                    @csrf
                                    <label>Shop Name</label>
                                    <input id="namatoko" type="text" placeholder="{{$toko->NAMA_TOKO}}" class="form-control{{ $errors->has('namatoko') ? ' is-invalid' : '' }}"
                                        name="namatoko" value="{{$toko->NAMA_TOKO}}" autofocus>

                                    <label>Shop Address</label>
                                    <input id="shopaddress" type="text" placeholder="{{$toko->ALAMAT_TOKO}}" class="form-control{{ $errors->has('shopaddress') ? ' is-invalid' : '' }}"
                                        name="shopaddress" value="{{$toko->ALAMAT_TOKO}}">

                                    <label>Province</label>
                                    <input id="province" type="text" placeholder="{{$toko->PROVINSI_TOKO}}" class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}"
                                        name="province" value="{{$toko->PROVINSI_TOKO}}">

                                    <label>City</label>
                                    <input id="city" type="text" placeholder="{{$toko->KOTA_TOKO}}" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                                        name="city" value="{{$toko->KOTA_TOKO}}">

                                    <label>Postal Code</label>
                                    <input id="postalcode" type="number" placeholder="{{$toko->KODEPOS_TOKO}}" class="form-control{{ $errors->has('postalcode') ? ' is-invalid' : '' }}"
                                        name="postalcode" value="{{$toko->KODEPOS_TOKO}}">

                                    <label>No. Rek Toko</label>
                                    <input id="norek" type="number" placeholder="{{$toko->NO_REK_TOKO}}" class="form-control{{ $errors->has('norek') ? ' is-invalid' : '' }}"
                                        name="norek" value="{{$toko->NO_REK_TOKO}}">

                                    <input class="login-sub" type="submit" value="Submit" />
                                </form>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="page-comments">
                            <div class="product-tab-desc">
                                <div class="product-page-comments">
                                    <div class="login-content login-margin">
                                        <form method="POST" action="{{route('create.sayur')}}" enctype="multipart/form-data">
                                            @csrf {{ method_field('post') }}
                                            <label>Nama Sayur</label>
                                            <input id="namasayur" type="text" class="form-control{{ $errors->has('namasayur') ? ' is-invalid' : '' }}" name="namasayur"
                                                value="{{ old('namasayur') }}" required autofocus> @if ($errors->has('namasayur'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('namasayur') }}</strong>
                                            </span>
                                            @endif

                                            <label>Harga Sayur</label>
                                            <input id="hargasayur" type="number" class="form-control{{ $errors->has('hargasayur') ? ' is-invalid' : '' }}" name="hargasayur"
                                                value="{{ old('hargasayur') }}" required> @if ($errors->has('hargasayur'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('hargasayur') }}</strong>
                                            </span>
                                            @endif

                                            <label>Detail Sayur</label>
                                            <input id="detailsayur" type="text" class="form-control{{ $errors->has('detailsayur') ? ' is-invalid' : '' }}" name="detailsayur"
                                                value="{{ old('detailsayur') }}" required> @if ($errors->has('detailsayur'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('detailsayur') }}</strong>
                                            </span>
                                            @endif

                                            <label>Kategori Sayur</label>
                                            <div class="pro-size">
                                                <select name="kategorisayur">
                                                    @foreach($kategori as $data)
                                                    <option value="{{$data->ID_KATEGORI}}">{{$data->NAMA_KATEGORI}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            @if ($errors->has('detailsayur'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('detailsayur') }}</strong>
                                            </span>
                                            @endif
                                            <br>

                                            <label>Gambar Sayur</label>
                                            <input type="file" name="file" id="file" required> @if ($errors->has('file'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('file') }}</strong>
                                            </span>
                                            @endif

                                            <label>Stock Sayur</label>
                                            <input id="stocksayur" type="number" class="form-control{{ $errors->has('stocksayur') ? ' is-invalid' : '' }}" name="stocksayur"
                                                value="{{ old('stocksayur') }}" required> @if ($errors->has('stocksayur'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('stocksayur') }}</strong>
                                            </span>
                                            @endif

                                            <input class="login-sub" type="submit" value="Submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="page-comments2">
                            <div class="product-tab-desc">
                                <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID Pembelian</th>
                                    <th>Alamt Kirim</th>
                                    <th>File Invoice</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            </tbody>
                            
                        </table>
                    </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-area end -->
@endif
<br>
<br>
@endsection