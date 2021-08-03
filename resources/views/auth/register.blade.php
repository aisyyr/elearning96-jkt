@extends('RegMaster')

@section('content')
<div class="page-wrapper bg-darkblue p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">

                <div class="card-body">
                <h3 class="title" align="center">Registrasi Akun Pengguna <br> E-Learning SMP Negeri 96 Jakarta</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="input-group">
                            <label for="name" class="label">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="input--style-4 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="penggunaid" class="label">{{ __('Nomor Identitas') }}</label>

                            <div class="col-md-6">
                                <input id="penggunaid" type="text" class="input--style-4 form-control @error('penggunaid') is-invalid @enderror" name="penggunaid" 
                                value="{{ old('penggunaid') }}" required autocomplete="penggunaid" maxlength="16">

                                @error('penggunaid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="email" class="label">{{ __('Alamat E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input--style-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="roles" class="label">{{ __('Registrasi Sebagai : ') }}</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="roles" id="roles" class="form-control @error('roles') is-invalid @enderror" name="roles" required autocomplete="roles">
                                    <option disabled="disabled" selected="selected">-- Pilih Role --</option>
                                    <option value="guru">{{ __('Guru') }}</option>
                                    <option value="siswa">{{ __('Siswa') }}</option>
                                </select>
                                <div class="select-dropdown"></div>
                                @error('roles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="kode_regist" class="label">{{ __('Kode Registrasi') }}</label>

                            <div class="col-md-6">
                                <input id="kode_regist" type="text" class="input--style-4 form-control @error('kode_regist') is-invalid @enderror" name="kode_regist" 
                                value="{{ old('kode_regist') }}" required autocomplete="kode_regist" maxlength="10">

                                @error('kode_regist')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="password" class="label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input--style-4 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input--style-4 form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- <select id="size" name="dokter">
                                <option value=""></option>
                        </select>
                        <script name="midroles">
                            $(document).ready(function() {
                                $("#roles").change(function() {
                                    var val = $(this).val();
                                    if (val == "Guru") {
                                        $("#size").html("<option value='Dr. Haryodi S.'>Dr. Haryodi S. </option><option value='Dr. Maria FR'>Dr. Maria FR </option>");
                                    } else if (val == "Siswa") {
                                        $("#size").html("<option value='Dr. Farrel K'>Dr. Farrel K. </option><option value='Dr. Alfiqh R '>Dr. Alfiqh R </option>");
                                });
                            });
                        </script> -->



                        <div class="form-group row mb-0">
                            <div class="p-t-30">
                                <button type="submit" class="btn btn--radius-2 btn--blue">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
