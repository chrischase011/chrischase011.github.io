@extends('layout.plain')

@section('content')
<div class="page-content" style="background-image: url('assets/loginformstyle/img/pink.jpg');">		<div class="form-v10-content">			
				@if(session()->has('error'))
				<div class="alert alert-danger xx">
					{{ session()->get('error') }}
				</div>
			@endif
<form action="{{ url('/register') }}" method="post">
	@csrf
	<div class="form-detail">

				<input type="hidden" name="usercontrol" id="usercontrol" value="2">
				<div class="form-left">
					<h2 style="color: #f56a79;">General Infomation</h2>
					
					<div class="form-group">
						<div class="form-row form-row-1">
						<input type="text" name="username" class="company @error('username') is-invalid @enderror" id="username" placeholder="Username" >
						@error('username')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
						<div class="form-row form-row-2">
							<input type="password" name="password" id="password" class="input-text @error('password') is-invalid @enderror" placeholder="Password" >
							@error('password')
								<span class="invalid-feedback">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						
					</div>

					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text @error('first_name') is-invalid @enderror" placeholder="First Name" >
							@error('first_name')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text @error('last_name') is-invalid @enderror" placeholder="Last Name" >
							@error('last_name')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						</div>
						
					</div>

					<div class="form-row">

							<span class="mx-3" style="color:gray;">Position</span>
						<select name="position" id="position">
						    <option value="director">Director</option>
						    <option value="manager">Manager</option>
						    <option value="employee">Employee</option>
							<option value="trainee">Trainee</option>
						    <option value="colleague">Colleague</option>
						    <option value="associate">Associate</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>

					<div class="form-row">
						<input type="text" name="company" class="company" id="company" placeholder="Company" >
					</div>
					<div class="form-row form-row-3">
						<input type="text" name="business_arena" class="business" id="business_arena" placeholder="Business Arena" >
					</div>
					<div class="form-row">
						<span class="mx-3" style="color:gray;">Birthday</span><input type="date" name="bday" class="bday" id="bday"  >
					</div>

				</div>

				<div class="form-right" style="background-color: #f56a79;">
					<h2>Contact Details</h2>
					<div class="form-row">
						<input type="text" name="address" class="street @error('address') is-invalid @enderror" id="address" placeholder="Street + Nr">
						@error('address')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="zip" class="zip" id="zip" placeholder="Zip Code" >
						</div>
						<div class="form-row form-row-2">
							<select name="city" id="city">

							<option value="0">--Select City--</option>
	<option value="Caloocan">Caloocan</option>
	<option value="Las Piñas">Las Piñas</option>
	<option value="Makati ">Makati </option>
	<option value="Malabon">Malabon</option>
	<option value="Mandaluyong">Mandaluyong</option>
	<option value="Manila">Manila</option>
	<option value="Marikina">Marikina</option>
	<option value="Muntinlupa">Muntinlupa</option>
	<option value="Navotas">Navotas</option>
	<option value="Parañaque">Parañaque</option>
	<option value="Pasay">Pasay</option>
	<option value="Pasig ">Pasig </option>
	<option value="Quezon City">Quezon City</option>
	<option value="San Juan">San Juan</option>
	<option value="Taguig">Taguig</option>
	<option value="Valenzuela">Valenzuela</option>
	<option value="Butuan">Butuan</option>
	<option value="Cabadbaran">Cabadbaran</option>
	<option value="Bayugan">Bayugan</option>
	<option value="Legazpi">Legazpi</option>
	<option value="Ligao">Ligao</option>
	<option value="Tabaco">Tabaco</option>
	<option value="Isabela">Isabela</option>
	<option value="Lamitan">Lamitan</option>
	<option value="Balanga">Balanga</option>
	<option value="Batangas City">Batangas City</option>
	<option value="Lipa">Lipa</option>
	<option value="Tanauan">Tanauan</option>
	<option value="Baguio">Baguio</option>
	<option value="Tagbilaran">Tagbilaran</option>
	<option value="Malaybalay">Malaybalay</option>
	<option value="Valencia">Valencia</option>
	<option value="Malolos">Malolos</option>
	<option value="Meycauayan">Meycauayan</option>
	<option value="San Jose del Monte">San Jose del Monte</option>
	<option value="Tuguegarao">Tuguegarao</option>
	<option value="Iriga">Iriga</option>
	<option value="Naga">Naga</option>
	<option value="Roxas">Roxas</option>
	<option value="Bacoor">Bacoor</option>
	<option value="Cavite City">Cavite City</option>
	<option value="Dasmariñas">Dasmariñas</option>
	<option value="Imus">Imus</option>
	<option value="Tagaytay">Tagaytay</option>
	<option value="Trece Martires">Trece Martires</option>
	<option value="Bogo">Bogo</option>
	<option value="Carcar">Carcar</option>
	<option value="Cebu City">Cebu City</option>
	<option value="Danao">Danao</option>
	<option value="Lapu-Lapu">Lapu-Lapu</option>
	<option value="Mandaue">Mandaue</option>
	<option value="Naga">Naga</option>
	<option value="Talisay">Talisay</option>
	<option value="Toledo">Toledo</option>
	<option value="Kidapawan">Kidapawan</option>
	<option value="Panabo">Panabo</option>
	<option value="Samal">Samal</option>
	<option value="Tagum">Tagum</option>
	<option value="Davao City">Davao City</option>
	<option value="Digos">Digos</option>
	<option value="Mati">Mati</option>
	<option value="Borongan">Borongan</option>
	<option value="Batac">Batac</option>	
	<option value="Laoag">Laoag</option>	
	<option value="Candon">Candon</option>	
	<option value="Vigan">Vigan</option>	
	<option value="Iloilo City">Iloilo City</option>
	<option value="Passi">Passi</option>	
	<option value="Cauayan">Cauayan</option>	
	<option value="Ilagan">Ilagan</option>	
	<option value="Santiago">Santiago</option>
	<option value="Tabuk">Tabuk</option>	
	<option value="San Fernando">San Fernando</option>	
	<option value="Biñan">Biñan</option>	
	<option value="Cabuyao">Cabuyao</option>	
	<option value="Calamba">Calamba</option>
	<option value="San Pablo">San Pablo</option>
	<option value="Santa Rosa">Santa Rosa</option>
	<option value="San Pedro">San Pedro</option>
	<option value="Iligan">Iligan</option>	
	<option value="Marawi">Marawi</option>	
	<option value="Baybay">Baybay</option>	
	<option value="Ormoc">Ormoc</option>	
	<option value="Tacloban">Tacloban</option>	
	<option value="Cotabato City">Cotabato City</option>
	<option value="Masbate City">Masbate City</option>
	<option value="Oroquieta">Oroquieta</option>
	<option value="Ozamiz">Ozamiz</option>
	<option value="Tangub">Tangub</option>
	<option value="Cagayan de Oro">Cagayan de Oro</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Gingoog">Gingoog</option>
	<option value="Bacolod">Bacolod</option>
	<option value="Bago">Bago</option>
	<option value="Cadiz">Cadiz</option>
	<option value="Escalante">Escalante</option>
	<option value="Himamaylan">Himamaylan</option>
	<option value="Kabankalan">Kabankalan</option>
	<option value="La Carlota">La Carlota</option>
	<option value="Sagay">Sagay</option>
	<option value="San Carlos">San Carlos</option>
	<option value="Silay">Silay</option>
	<option value="Sipalay">Sipalay</option>
	<option value="Talisay">Talisay</option>
	<option value="Victorias">Victorias</option>
	<option value="Bais">Bais</option>
	<option value="Bayawan">Bayawan</option>
	<option value="Canlaon">Canlaon</option>
	<option value="Dumaguete">Dumaguete</option>
	<option value="Guihulngan">Guihulngan</option>
	<option value="Tanjay">Tanjay</option>
	<option value="Cabanatuan">Cabanatuan</option>
	<option value="Gapan">Gapan</option>
	<option value="Muñoz">Muñoz</option>
	<option value="Palayan">Palayan</option>
	<option value="San Jose">San Jose</option>
	<option value="Calapan	Oriental">Calapan	Oriental</option>
	<option value="Puerto Princesa">Puerto Princesa</option>
	<option value="Angeles">Angeles</option>
	<option value="Mabalacat ">Mabalacat </option>
	<option value="San Fernando">San Fernando</option>
	<option value="Alaminos">Alaminos</option>
	<option value="Dagupan">Dagupan</option>
	<option value="San Carlos">San Carlos</option>
	<option value="Urdaneta">Urdaneta</option>
	<option value="Lucena">Lucena</option>
	<option value="Tayabas">Tayabas</option>
	<option value="Antipolo">Antipolo</option>
	<option value="Calbayog">Calbayog</option>
	<option value="Catbalogan">Catbalogan</option>
	<option value="Sorsogon City">Sorsogon City</option>
	<option value="General Santos">General Santos</option>
	<option value="Koronadal">Koronadal</option>
	<option value="Maasin">Maasin</option>
	<option value="Tacurong">Tacurong</option>
	<option value="Surigao City">Surigao City</option>
	<option value="Bislig">Bislig</option>
	<option value="Tandag">Tandag</option>
	<option value="Tarlac City">Tarlac City</option>
	<option value="Olongapo">Olongapo</option>
	<option value="Dapitan">Dapitan</option>
	<option value="Dipolog">Dipolog</option>
	<option value="Pagadian">Pagadian</option>
	<option value="Zamboanga City">Zamboanga City</option>
</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
					<div class="form-row">
						<select id="country" name="country">
   							<option value="Philippines">Philippines</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
						<div class="form-row">
							<input type="text" name="contact" class="input-text" id="contact" placeholder="Phone Number" >
						</div>
					<div class="form-row">
						<input type="email" name="email" id="email" class="input-text @error('email') is-invalid @enderror" placeholder="Your Email">
						@error('email')
							<span class="invalid-feedback">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox" id="checkbox" required>
						  	<span class="checkmark"></span>
						  	
						</label>
					</div>
					<div class="form-row-last">
						<center><button type="submit" name="submit" class="register">Sign Up </button>
						<button type="button" onclick="redirect()" class="register" >Back</button></center>
					</div>
				</div>
			
			</div>
			</form>
		</div>
	</div>
	
	<script type="text/javascript">
		function redirect()
		{
			location.href ="{{ url('/reg') }}";
		}
		setTimeout(function(){
			$(".invalid-feedback").fadeOut('slow');
		},3000);

	
	</script>
@endsection