@extends('master.auth.master_reset_auth')

@section('content_reset')
<section class="min-vh-100">
	<div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg mb-0"
		style="background-image: url('{{ asset('master/dashboard/template/assets/img/curved-images/curved19.jpg') }}');">
		<span class="mask bg-gradient-dark opacity-6"></span>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center mx-auto mt-2">
					<h1 class="text-white mb-2 mt-5">Kata Sandi Baru</h1>
					<p class="text-lead text-white">Silakan buat kata sandi baru dengan minimum 5 karakter dan pastikan
						benar.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-lg-n10 mt-md-n11 mt-n10">
			<div class="col-xl-7 col-lg-7 col-md-8 mx-auto">
				<div class="card z-index-0">
					<div class="text-center mt-3">
						<h1>
							<h3><strong>Password Baru Anda</strong></h3>
						</h1>
					</div>

					<div class="card-body">

						<form role="form text-left" action="{{ route('password.update') }}" method="POST">
							@csrf

							<div class="mb-3">
								<label for="password" class="form-label">
									Password Baru <strong class="text-danger">*</strong>
								</label>
								<p class="text-sm fst-italic">
									Silakan buat password baru dengan minimum 5 karakter dan pastikan konfirmasi
									password terisi.
								</p>
								<input type="password" id="password" name="password"
									class="form-control @error('password') is-invalid @enderror @if(old('password') && !($errors->has('password'))) is-valid @endif"
									placeholder="Password Baru" aria-label="Password" aria-describedby="password-addon">

								@error('password')
								<small class="text-danger fst-italic">
									{{ $message }}
								</small>
								@enderror
							</div>

							<div class="mb-3">
								<label for="password" class="form-label">
									Konfirmasi Password Baru <strong class="text-danger">*</strong>
								</label>
								<input type="password" id="password2" name="password_confirmation"
									class="form-control @error('password') is-invalid @enderror @if(old('password') && !($errors->has('password'))) is-valid @endif"
									placeholder="Konfirmasi Password Baru" aria-label="Password"
									aria-describedby="password-addon">

								@error('password')
								<small class="text-danger fst-italic">
									{{ $message }}
								</small>
								@enderror
							</div>

							<div class="d-flex justify-content-between">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="formCheckbox">
									<label class="form-check-label" for="formCheckbox">
										Lihat Password
									</label>
								</div>
							</div>

							<div class="text-center">
								<button type="submit" class="btn bg-gradient-dark w-100 my-3 mb-2">Simpan
									password baru</button>
							</div>

							<input type="hidden" name="token" value="{{ request()->token }}">

							<input type="hidden" name="email" value="{{ request()->email }}">
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('auth_reset_section')
<script>
	$(document).ready(function(){
			@if (Session::has('errors'))
				Swal.fire({
					icon: 'error',
					title: '<strong>Password Gagal Tersimpan</strong>',
					html: 'Pastikan <b>form password dan konfirmasi password sudah terisi</b> dan  <b>memiliki minimal 5 karakter</b>.',
					showConfirmButton: true,
					confirmButtonColor: '#0174BE',
					focusConfirm: false,
					confirmButtonText: 'Konfirmasi'
				});
			@endif
		});
</script>
@endsection

@section('any_script')
<script>
	$(document).ready(function() {
		let password = document.getElementById('password');
		let password2 = document.getElementById('password2');
		let formCheckbox = document.getElementById('formCheckbox');

		formCheckbox.onclick = function(){
			if (formCheckbox.checked){
				password.type = 'text';
				password2.type = 'text';
			} else {
				password.type = 'password';
				password2.type = 'password';
			}
		}
	});
</script>
@endsection