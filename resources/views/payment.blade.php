@extends('layouts.layoutfix')

@section('content')
<div class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Payment Verification</h1>
							<ul>
								<li><a href="index.html">home</a> <span class="divider">|</span></li>
								<li>Verification</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- login-area start -->
		<div class="login-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="login-content">
							<h2 class="login-title">Upload Transfer Slip</h2>
                            <form method="POST" action="{{ route('file.upload') }}" enctype="multipart/form-data">
								@csrf
								{{ method_field('post') }}
								
								<div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
									<label>Choose a File</label>
                            		<input type="file" name="file">
                            		<span class="help-block text-danger">{{ $errors->first('file') }}</span>
                        		</div>
								<input class="login-sub" type="submit" value="Upload" />
							</form>
						</div>
                    </div>
				</div>
			</div>
		</div>
		<!-- login-area end -->
@endsection
