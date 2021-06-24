@extends('layouts.app')

    @section('content')
		<section>
			{{-- Login temp --}}
			<div class="content">
				<div class="user" id="user">
					<div class="userlogin">
						<div class="imgbx">
							<img src="{{ asset('uplodes/blog/Postbook.png') }}">
						</div>
						<div class="contentbox">
							<div class="formbx">
								<h2>{{ __('Login') }}</h2>
								<form method="POST" action="{{ route('login') }}">
									@csrf
									<div class="inputbx">
										<span>{{ __('E-Mail Id / Phone No.') }}</span>
										<input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
										
										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									
									<div class="inputbx">
										<span>{{ __('Password') }}</span>
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
										
										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									
									
									<div class="remember">
										<label><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}</label>
									</div>
									
									<div class="inputbx">
										<input type="submit" value="{{ __('Login') }}" name="">
										{{-- @if (Route::has('password.request'))
										<a class="btn btn-link" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
										</a>
										@endif --}}
									</div>
									
								</form>
								<p class="text-center" onclick="toggleFrom()">You Are Not User? <span>Register</span></p>
								{{-- <h3>Login with Social media</h3>
								<div class="social-links">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
								</div> --}}
							</div>
						</div>
					</div>
				</div>

				{{-- Registration temp --}}
				<div class="admin" id="admin">
					<div class="adminlogin" id="adminlogin">
						<div class="contentbox registration">
							<div class="formbx">
								<h2>{{ __('Register') }}</h2>
								<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
									@csrf
									<div class="inputbx">
										<span>{{ __('Name') }}</span>
										<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
										@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									
									<div class="inputbx">
										<span>{{ __('E-Mail Address') }}</span>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
										
										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									
									<div class="inputbx">
										<span>{{ __('Phone No.') }}</span>
										<input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
										
										@error('phone')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									
									<div class="inputbx">
										<span>{{ __('Profile Photo') }}</span>
										<input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">
										
										@error('image')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="inputbx">
										<span>{{ __('Password') }}</span>
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
										
										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									
									<div class="inputbx">
										<span>{{ __('Confirm Password') }}</span>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
									</div>
									<div class="inputbx">
										<input type="submit" value="{{ __('Register') }}" name="">
									</div>
								</form>
								<p class="text-center" onclick="toggleFrom()">Are You? <span>User</span></p>
								{{-- <h3>Login with Social media</h3>
								<div class="social-links">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
								</div> --}}
							</div>
						</div>
						<div class="imgbx">
							<img src="{{ asset('uplodes/blog/Postbook.png') }}">
						</div>
					</div>
				</div>
			</div>
		</section>
		
		@endsection