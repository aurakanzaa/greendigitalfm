@extends('layouts.layoutfix')

@section('content')
<div class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Login</h1>
							<ul>
								<li><a href="index.html">home</a> <span class="divider">|</span></li>
								<li>Login</li>
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
					<div class="col-md-6">
						<div class="login-content">
							<h2 class="login-title">Login</h2>
							<p>Hello, Welcome to your account</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
								<label>Email Address</label>
								    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

								<label>Password</label>
								    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
								<div class="login-lost">
									<span class="log-rem">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
									</span>
									<span class="forgot-login">
										<a href="{{ route('password.request') }}">Forgot your password?</a>
									</span>
								</div>
								<input class="login-sub" type="submit" value="Login" />
							</form>
						</div>
                    </div>

                    {{-- Register --}}
					<div class="col-md-6">
						<div class="login-content login-margin">
							<h2 class="login-title">create a new account</h2>
							<p>Create your own GDFM account.</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <label>Username</label>
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif

								<label>Email Address</label>
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <label>Full Name</label>
                                <input id="fullname" type="text" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('fullname') }}" required>

                                @if ($errors->has('fullname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif

                                <label>Address</label>
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif

                                <label>Phone Number</label>
                                <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif

                                <label>Resident Identity Card</label>
                                <input id="noktp" type="number" class="form-control{{ $errors->has('noktp') ? ' is-invalid' : '' }}" name="noktp" value="{{ old('noktp') }}" required>

                                @if ($errors->has('noktp'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('noktp') }}</strong>
                                    </span>
                                @endif

                                <label>Password</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <label>Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

								<input class="login-sub" type="submit" value="sign up" />
							</form>
							<div class="sign-up-today">
								<h2 class="login-title">sign up today and you'll be able to:</h2>
								<ul>
									<li>
										<span>
											<i class="fa fa-check-square-o"></i>
											<span>speed your way through the checkout</span>
										</span>									
									</li>
									<li>
										<span>
											<i class="fa fa-check-square-o"></i>
											<span>track your order easily</span>
										</span>									
									</li>
									<li>
										<span>
											<i class="fa fa-check-square-o"></i>
											<span>keep a record of your all purchase</span>
										</span>									
									</li>
								</ul>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- login-area end -->
@endsection
