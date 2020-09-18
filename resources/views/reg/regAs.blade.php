@extends('layout.plain')

@section('content')
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/loginformstyle/img/image.jpg');">
			<div class="wrap-login100" style="height: 500px; width: 450px">
				<span class="login100-form-logo">
					<img src="assets/loginformstyle/img/origlogo.png" width="121" height="120">
				</span>

				<span class="login100-form-title p-b-34 p-t-27">
						Register As
				</span>

				<div class="container-login100-form-btn">
					<a href="RegClient.php">
						<a href="{{ url('/regClient') }}" class="login100-form-btn" type="client" name="client">
							Client
						</a>
					</a>
				</div>
				<br>
				<div class="container-login100-form-btn">
					<a href="RegOrganizer.php">
						<a href="{{ url('/register') }}" class="login100-form-btn" type="organizer" name="organizer">
							Organizer
						</a>
					</a>
				</div>
					<div class="container-login100-form-btn py-4">
					
						<a href="{{ url('/') }}" class="login100-form-btn" type="home" name="home">
							Back to Home
						</a>
					
				</div>
			</div>
		</div>
	</div>
@endsection