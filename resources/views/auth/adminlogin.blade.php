@extends('layouts.app')

@section('title', 'Staff Login')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/custom-auth-style.css') }}">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('content')

<div class="row inner">
	
	<div class="col-lg-4 div-side py-5 d-none d-lg-block" data-aos="fade-right" data-aos-duration="1000">
		<img src="{{ asset('backend/img/login.jpg') }}" class="shadow-sm img-fluid w-50 rounded-circle mb-4">
		<h1 class="my-5"><i class="fas fa-map-marker-alt fa-sm mr-2"></i> HOTEL RIZA.</h1>
		<p class="p-contact">
			+95 9129 1299 198 | hotelriza.info@gmail.com <br>
			Pyay Road, Yangon, Myanmar
		</p>
		<p class="p-since">
			<em>- Since 2020 -</em>
		</p>
	</div>

	<div class="col-lg-8 div-login-form py-5">

		<div class="row justify-content-md-center staff-login">
			<div class="col-md-10">
				<h2>Welcome back HOTEL RIZA!</h2>
				<div class="card" data-aos="zoom-in" data-aos-duration="1000">
					<div class="card-header">
						<h4 class="mb-0">Staff Login Form</h4>
					</div>
					<div class="card-body">
						
						<form method="POST" action="{{ route('login') }}">
						@csrf

							<div class="form-group">
								<label for="email">{{ __('Email Address') }}</label>
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="info@example.com" autofocus>

								@error('email')
								<span class="text-danger" role="alert">
									{{ $message }}
								</span>
								@enderror
							</div>

							<div class="form-group">
								<label for="password">{{ __('Password') }}</label>
								<input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="&#10045;&#10045;&#10045;&#10045;&#10045;">

								@error('password')
								<span class="text-danger" role="alert">
									{{ $message }}
								</span>
								@enderror
							</div>

							<div class="form-group mt-4 mb-5">
								<div class="float-left">
									<div class="custom-control custom-checkbox">
									  <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
									  <label class="custom-control-label text-muted" for="remember">{{ __('Remember Me') }}</label>
									</div>
								</div>
								<div class="float-right text-right">
									@if (Route::has('password.request'))
									<a class="btn btn-link btn-sm" href="{{ route('password.request') }}">
										{{ __('Forgot Your Password?') }}
									</a>
									@endif
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<div class="col-sm-6 mb-3 px-0 pr-sm-2">
									<button type="submit" class="btn btn-primary btn-block py-2">{{ __('Login') }}</button>
								</div>
								<div class="col-sm-6 mb-5 px-0 pl-sm-2">
									<a href="{{ route('home') }}" class="btn btn-outline-secondary btn-block py-2">Back to Home</a>
								</div>
							</div>
							
						</form>

					</div>	{{-- // end of card-body --}}
				</div>
			</div>
		</div>	{{-- // end of inner row --}}
		
	</div>

</div>

@endsection

@section('script')
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
	<script>
	  AOS.init();
	  $(function () {
	  	$("body").niceScroll({
        cursorwidth: "8px",
        cursorborder: "1px solid rgba(12, 11, 9, 0.6)",
   		});
	  })
	</script>
@endsection