@extends('layout.plain')

@section('content')
	<div class="wrapper" style="background-image: url('assets/loginformstyle/img/balloons.jpg');">
			<div class="inner">
				
				<div class="image-holder">
					<img src="assets/loginformstyle/img/balloons.jpg" alt="">
  					
				</div>
				<form action="{{ action('App\Http\Controllers\RegistrationController@store') }}" method="post">

					{{ csrf_field() }}
					<input type="hidden" name="usercontrol" id="usercontrol" value="3">
					<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
					<h3>Client Registration Form</h3>
					<div class="form-group">
						<input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control @error('first_name') is-invalid @enderror">
						@error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<input type="text" placeholder="Last Name" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror">
						@error('last_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-wrapper">
						<input type="text" placeholder="E-mail" id="email" name="email" class="form-control @error('email') is-invalid @enderror">
						<i class="zmdi zmdi-account"></i>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-wrapper">
						<input type="date" name="bday" id="bday" class="form-control" placeholder="Birthday" required>
					</div>

					<div class="form-wrapper">
						<input type="text" placeholder="Address" id="address" name="address" class="form-control @error('address') is-invalid @enderror">
						<i class="zmdi zmdi-gps-dot"></i>
						@error('address')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-wrapper">
						<select id="position" name="position" class="form-control @error('position') is-invalid @enderror">
						<option>Freelancer</option>
						
						</select>
						<i class="zmdi zmdi-chevron-down"></i>
						@error('position')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-wrapper">
						<input type="text" id="username" name="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror">
						<i class="zmdi zmdi-email"></i>
						@error('username')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-wrapper">
						<input type="password" id="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror">
						<i class="zmdi zmdi-lock"></i>
						@error('password')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" id="confirm" name="confirm" class="form-control" onkeyup="conf()">
						<i class="zmdi zmdi-lock"></i>
						<span class="text-danger err"></span>
					</div>
					<div class="form-wrapper">
						<input type="file" name="fileToUpload" id="fileToUpload" class="@error('fileToUpload') is-invalid @enderror" style="vertical-align: middle;">
						@error('fileToUpload')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" type="login" name="login">
							Sign Up
						</button>
						<a href="{{ url('/reg') }}" class="login100-form-btn" type="login" name="login">
							Back
						</a>
					</div>
				</form>
			</div>
		</div>
		<script type="text/javascript">function conf(){var p=$("#password").val();var c=$("#confirm").val();if(c != p){$(".err").text("Password did not match!");return false;}else{$(".err").text(""); return true;}}setTimeout(function(){$(".invalid-feedback").fadeOut('slow');},2000);
	
	</script>
@endsection