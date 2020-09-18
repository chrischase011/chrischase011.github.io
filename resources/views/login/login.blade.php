@extends('layout.plain')

@section('content')
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/loginformstyle/img/image.jpg');">
			
			<div class="wrap-login100" style="height: 650px; width: 450px">
				<span class="login100-form-logo">
					<img src="assets/loginformstyle/img/origlogo.png" width="121" height="120">
				</span>

				<span class="login100-form-title p-b-34 p-t-27">
						User Log in
				</span>
				@if(session()->has('error'))
				<div class="alert alert-danger xx">
					{{ session()->get('error') }}
				</div>
			@endif
				<form action="{{ route('login') }}" method="post">
					{{ csrf_field() }}
				<div class="wrap-input100 validate-input" data-validate = "Enter Username">
					<input class="input100 @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username" autocomplete="off" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@error('username')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Enter Password">
					<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
				</div>
				
				<br>
				
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit" name="login">
						Login
					</button>
				</div>

				</form>
				<div class="text-center p-t-70">
					<a class="txt1" href="{{ url('/reg') }}">
						New User?
					</a>
						<br>
					<a class="txt1" href="RegForgotClient.php">
								Forgot Password?
					</a>
				</div>

		</div>
	</div>
</div>
<script type="text/javascript">
	setTimeout(function(){$(".xx").fadeOut('slow');},3000)
</script>
@endsection