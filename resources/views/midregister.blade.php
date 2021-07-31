@extends('RegMaster')

@section('content')

<div class="page-wrapper bg-darkblue p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">

                <div class="card-body">
                <h3 class="title" align="center">Registrasi Akun {{ Auth::user()->roles }}</h3>

                <form role="form" method="POST" action="{{ route('register2') }}" enctype="multipart/form-data">
                        @csrf
                        @if(auth()->user()->roles == 'guru')
                        <div class="input-group">
                            <label for="nip_guru" class="label">{{ __('NIP Guru') }}</label>

                            <div class="col-md-6">
                                <input id="nip_guru" type="text" class="input--style-4 " name="nip_guru" value="{{ old('nip_guru') }}">
                                @error('nip_guru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="kode_regist" class="label">{{ __('Kode Registrasi') }}</label>

                            <div class="col-md-6">
                                <input id="kode_regist" type="text" class="input--style-4" name="kode_regist" value="{{ old('kode_regist') }}">
                                @error('kode_regist')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif


                        @if(auth()->user()->roles == 'siswa')
                        <div class="input-group">
                            <label for="nisn_siswa" class="label">{{ __('NISN Siswa') }}</label>

                            <div class="col-md-6">
                                <input id="nisn_siswa" type="text" class="input--style-4" name="nisn_siswa" value="{{ old('nisn_siswa') }}">

                                @error('nisn_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="kode_regist" class="label">{{ __('Kode Registrasi') }}</label>

                            <div class="col-md-6">
                                <input id="kode_regist" type="text" class="input--style-4" name="kode_regist" value="{{ old('kode_regist') }}">

                                @error('kode_regist')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif

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