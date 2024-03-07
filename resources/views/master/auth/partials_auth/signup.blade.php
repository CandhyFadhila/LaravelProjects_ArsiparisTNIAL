@extends('master.auth.master_auth')

@section('content_auth')
<div class="container">
	<div class="row">
		<div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
			<div class="card card-plain mt-8">
				<div class="card-header pb-0 text-left bg-transparent">
					<h3 class="font-weight-bolder text-warning text-gradient">Selamat Datang</h3>
					<p class="mb-0">Silahkan isikan data berikut untuk memembuat akun baru</p>
				</div>
				<div class="card-body">
					<form role="form" method="#">
						@csrf

						<label>Nama Lengkap</label>
						<div class="mb-3">
							<input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama"
								aria-describedby="nama-addon">
							{{-- <div id="nama-addon" class="form-text">We'll never share your email with anyone else.
							</div> --}}

							@error('nama')
							<small class="text-danger">
								{{ $message }}
							</small>
							@enderror
						</div>

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

						{{-- <div class="row">
							<label>Jabatan</label>
							<div class="col mb-3">
								<select class="select2-register">
									<option value="GOL/3B">GOL/3B</option>
									<option value="GOL/3C">GOL/3C</option>
								</select>
							</div>
						</div> --}}


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
						</div>

						<div class="text-center">
							<button type="submit" class="btn bg-gradient-warning w-100 mt-3 mb-0">Buat Akun</button>
						</div>
					</form>
				</div>
				<div class="card-footer text-center pt-0 px-lg-2 px-1">
					<p class="mb-4 text-sm mx-auto">
						Sudah punya akun?
						<a href="{{ url('/') }}" class="text-warning text-gradient font-weight-bold"
							target="_blank">Login disini</a>
					</p>
				</div>
			</div>
		</div>

		{{-- TODO | IMG SECTION --}}
		<div class="col-md-6">
			<div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
				<div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n7"
					style="background-image:url('{{ asset('master/dashboard/template/assets/img/curved-images/curved13.jpg') }}">
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

@section('select2')
<script>
	$(document).ready(function() {
		$('.select2-register').select2();

	});
</script>
@endsection