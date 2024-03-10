@extends('client.master.master')

@section('title','Đăng nhập')

@section('header')
    @include('client.layout.header')
@endsection	

@section('css')
    <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{{asset('admin/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css')}}">
    <!--===============================================================================================-->
@endsection

@section('js')
    <!--===============================================================================================-->
        <script src="{{ asset('admin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/vendor/daterangepicker/moment.min.js')}}"></script>
        <script src="{{ asset('admin/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('admin/js/main.js')}}"></script>
@endsection

@section('main')
	<div class="limiter">
		<div class="container-login100">
			@if(session('error'))
			<div id="error_m" class="alert alert-danger">
				{{session('error')}}
			</div>
			@endif
			@if(session('success'))
				<div id="success_m" class="alert alert-success">
					{{session('success')}}
				</div>
			@endif
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form method="post" action="{{route('user.client.register')}}" class="login100-form validate-form flex-sb flex-w">
					@csrf
					<span class="login100-form-title p-b-32">
						Account Sign up
					</span>

                    <span class="txt1 p-b-11">
						UserName
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Name is required">
						<input class="input100" type="text" name="name" required>
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
						<input class="input100" type="text" name="email" required>
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100"></span>
					</div>

                    <span class="txt1 p-b-11">
						Confimed Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password_confirmation" required>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
@stop

@section('footer')
    @include('client.layout.footer')
@endsection