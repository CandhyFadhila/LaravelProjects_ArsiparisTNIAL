@extends('master.auth.master_auth')

@section('content_auth')
<div class="container">
	<div class="row">
		<div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
			<div class="card card-plain mt-8">
				<div class="card-header pb-0 text-left bg-transparent">
					<h3 class="font-weight-bolder text-info text-gradient">Staff MinPers</h3>
					<p class="mb-0">Masukkan email dan password anda sebelum login</p>
				</div>
				<div class="card-body">
					<form role="form" method="#">
						@csrf

						<label>Email</label>
						<div class="mb-3">
							<input type="email" class="form-control" placeholder="Email" aria-label="Email"
								aria-describedby="email-addon">

							@error('email')
							<small class="text-danger fst-italic">
								{{ $message }}
							</small>
							@enderror
						</div>

						<label>Password</label>
						<div class="mb-3">
							<input type="password" id="password" class="form-control" placeholder="Password"
								aria-label="Password" aria-describedby="password-addon">

							@error('password')
							<small class="text-danger fst-italic">
								{{ $message }}
							</small>
							@enderror
						</div>

						<div class="d-flex justify-content-between">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="formCheckbox">
								<label for="formCheckbox" class="form-check-label text-secondary">
									<small class="text-bold">Lihat
										Password</small>
								</label>
							</div>
							<div class="forgot">
								<small>

									<a href="{{ url('/forgot-password') }}">Lupa Password?</a>
								</small>
							</div>
						</div>

						<div class="text-center">
							<button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
						</div>
					</form>
				</div>
				<div class="card-footer text-center pt-0 px-lg-2 px-1">
					<p class="mb-4 text-sm mx-auto">
						Belum punya akun?
						<a href="{{ url('/signup') }}" class="text-info text-gradient font-weight-bold">Buat akun
							disini</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
				<div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
					style="background-image:url('{{ asset('master/dashboard/template/assets/img/curved-images/curved6.jpg') }}">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('any_script')
<script>
	$(document).ready(function() {
		let password = document.getElementById('password');
		let formCheckbox = document.getElementById('formCheckbox');

		formCheckbox.onclick = function(){
			if (formCheckbox.checked){
				password.type = 'text';
			} else {
				password.type = 'password';
			}
		}
	});
</script>
@endsection