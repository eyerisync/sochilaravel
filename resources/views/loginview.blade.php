<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ asset('dist/dist/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/dist/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/dist/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/dist/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/dist/_all-skins.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{ asset('dist/dist/css/styles.css') }}">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<!--<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>-->
				</div>
			</div>
			<div class="card-body">
				<!--@if(isset(Auth::user()->username))
					<script>window.location="/login/adminview";</script>
				@endif

				@if($message = Session::get('error'))
					<div class="alert alert-danger alert-block">
						<button type="button" class="close" data-dismmis="alert">&times;</button>
						<strong>{{ $message }}</strong>
					</div>
				@endif

				@if(count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif-->
				<!--@if(isset(Auth::user()->email))
				    	<script>window.location="/main";</script>
				@endif-->

				@if ($message = Session::get('error'))
				   <div class="alert alert-danger alert-block">
				    <button type="button" class="close" data-dismiss="alert">×</button>
				    <strong>{{ $message }}</strong>
				   </div>
				@endif

				@if (count($errors) > 0)
				    <div class="alert alert-danger">
				     <ul>
				@foreach($errors->all() as $error)
				      <li>{{ $error }}</li>
				@endforeach
				     </ul>
				    </div>
				@endif
				<form method="POST" action="{{ url('/main/checklogin') }}">
					@csrf
					<div class="input-group form-group-lg">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Email" name="email" id="email">

					</div>
					<div class="input-group form-group-lg mt-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password" name="password" id="password">
					</div>
					<div class="row align-items-center remember mt-3">
						<input type="checkbox" name="remember" id="remember">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="register">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center links">
				    <a href="{{ url('login/google')}}" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon"><img src="{{asset('images/Icons/google.svg')}}"></span>
                        <span class="btn-inner--text"><h4 class="text-white">Google</h4></span>
                    </a>
                </div>
				<div class="d-flex justify-content-center">
					@if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<script src="{{ asset('dist/dist/demo.js') }}"> </script>
<script src="{{ asset('dist/dist/jquery.min.js') }}"> </script>
<script src="{{ asset('dist/dist/bootstrap.min.js') }}"> </script>
<script src="{{ asset('dist/dist/fastclick.js') }}"> </script>
<script src="{{ asset('dist/dist/jquery.slimscroll.min.js') }}"> </script>
<script src="{{ asset('dist/dist/icheck.min.js') }}"> </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
