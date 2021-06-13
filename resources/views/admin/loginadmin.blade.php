@extends('masterlogin')

@section('content')

                    <form class="login100-form validate-form" action="" method="POST">
                    {{csrf_field()}}
					<span class="login100-form-title">
						Login Admin
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name" placeholder="Username Admin">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" minlength="8">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Lupa
						</span>
						<a class="txt2" href="#">
							Password?
						</a>
					</div> -->

					<div class="text-center p-t-136">
                              <h6> Halo Admin ! </h6>
						<!-- <a class="txt2" href="#">
							Buat Akun
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a> -->
					</div>
				</form>

@endsection