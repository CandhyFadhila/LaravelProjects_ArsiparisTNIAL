@extends('master.auth.master_reset_auth')

@section('content_reset')
<section class="min-vh-100">
	<div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg mb-0"
		style="background-image: url('{{ asset('master/dashboard/template/assets/img/curved-images/curved-11.jpg') }}');">
		<span class="mask bg-gradient-dark opacity-6"></span>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center mx-auto mt-2">
					<h1 class="text-white mb-2 mt-5">Verifikasi Email</h1>
					<p class="text-lead text-white">Jika password lupa, silahkan masukkan email yang terdaftar untuk
						menerima
						kode verifikasi dan membuat password baru.
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
							<h3><strong>Verifikasi Email Anda</strong></h3>
						</h1>
					</div>

					<div class="card-body">

						<form role="form text-left" action="{{ route('password.email') }}" method="POST">
							@csrf

							<div class="mb-3">
								<label for="email" class="form-label">
									Alamat Email <strong class="text-danger">*</strong>
								</label>
								<p class="text-sm fst-italic">
									Silakan buat password baru dengan memasukkan email anda
									dan ikuti tautan yang disediakan pada kotak pesan
									Gmail.
								</p>
								<input type="email" id="email" name="email"
									class="form-control @error('email') is-invalid @enderror @if(old('email') && !($errors->has('email'))) is-valid @endif"
									placeholder="Email" aria-label="Email" aria-describedby="email-addon">

								@error('email')
								<small class="text-danger fst-italic">
									{{ $message }}
								</small>
								@enderror


							</div>


							<div class="text-center">
								<button type="submit" class="btn bg-gradient-dark w-100 my-3 mb-2">Kirim Kode
									Verifikasi</button>
								<p class="text-sm mt-3 mb-0">Belum mendapatkan kode? <a href="javascript:;"
										class="text-dark font-weight-bolder">Kirim ulang</a></p>
							</div>

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
			@if (Session::has('status'))
				Swal.fire({
					icon: 'success',
					title: '<strong>Verifikasi Berhasil!</strong>',
					html: 'Silahkan <b>cek kotak pesan Gmail </b>anda, ikuti petunjuk untuk <b> membuat kata sandi baru</b>.',
					showConfirmButton: true,
					confirmButtonColor: '#0174BE',
					focusConfirm: false,
					confirmButtonText: 'Konfirmasi'
				});
			@endif

			// PASSWORD NOT MATCH
			@if (Session::has('errors'))
				Swal.fire({
					icon: 'error',
					title: '<strong>Verifikasi Gagal!</strong>',
					html: 'Maaf kami tidak bisa mengirimkan verifikasi email. Silahkan <b>cek kembali email anda</b>.',
					showConfirmButton: true,
					confirmButtonColor: '#0174BE',
					focusConfirm: false,
					confirmButtonText: 'Konfirmasi'
				});
			@endif
		});
</script>
@endsection