@extends('layout.app')

@section("cover")
	@include("inc.cover")
@endsection
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 p-1">
			
				<h1 class="text-center">Building Events with Purpose</h1>
			</div>
		</div>
		<div class="row bg-dark p-5">
					<div class="col-md-3 col-sm-2 ">
						<div class="card w-100">
							<div class="card-body py-5 text-center" style="background: url('assets/img/debut.jpg'); background-repeat: no-repeat; background-size: cover; height: 300px;">
								<h5>Debutations</h5>
								<p class="text-white font-weight-bold lead" >Wanna party on your debut? Try now!</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-2 p-auto">
						<div class="card w-100">
							<div class="card-body py-5 text-center " style="background: url('assets/img/debut.jpg'); background-repeat: no-repeat; background-size: cover; height: 300px;">
								<h5>Debutations</h5>
								<p class="text-black">Wanna party on your debut? Try now!</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-2">
						<div class="card w-100">
							<div class="card-body py-5 text-center" style="background: url('assets/img/debut.jpg'); background-repeat: no-repeat; background-size: cover; height: 300px;">
								<h5>Debutations</h5>
								<p class="text-black">Wanna party on your debut? Try now!</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-2">
						<div class="card w-100">
							<div class="card-body py-5 text-center" style="background: url('assets/img/debut.jpg'); background-repeat: no-repeat; background-size: cover; height: 300px;">
								<h5>Debutations</h5>
								<p class="text-black">Wanna party on your debut? Try now!</p>
							</div>
						</div>
					</div>
				</div>
	</div>

@endsection