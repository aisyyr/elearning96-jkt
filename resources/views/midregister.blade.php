@extends('RegMaster')

@section('content')

<div class="page-wrapper bg-darkblue p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">

                <div class="card-body">
                <h3 class="title" align="center">Registrasi Akun {{ Auth::user()->roles }}</h3>
                    <form method="POST" action="{{ route('register2') }}">
                        @csrf

                         <!--UNTUK MIDDLEWARE GURU-->
                         @if(auth()->user()->roles == 'Guru')
                        <div class="input-group">
                            <label for="nip_guru" class="label">{{ __('NIP Guru') }}</label>

                            <div class="col-md-6">
                                <input id="nip_guru" type="text" class="input--style-4 form-control @error('nip_guru') is-invalid @enderror" name="nip_guru"
                                value="{{ old('nip_guru') }}" required autocomplete="nip_guru" maxlength="16">

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
                            <label for="nama_pelajaran" class="label">{{ __('Mata Pelajaran yang diajar (1) * : ') }}</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="nama_pelajaran" id="nama_pelajaran" class="form-control @error('nama_pelajaran') is-invalid @enderror" name="nama_pelajaran" required autocomplete="nama_pelajaran">
                                    <option disabled="disabled" selected="selected">-- Pilih Mata Pelajaran --</option>
                                    <option>{{ __('Bahasa Indonesia') }}</option>
                                    <option>{{ __('Pendidikan Agama') }}</option>
                                    <option>{{ __('Matematika') }}</option>
                                    <option>{{ __('Seni Budaya') }}</option>
                                    <option>{{ __('IPA') }}</option>
                                    <option>{{ __('PKN') }}</option>
                                    <option>{{ __('Bahasa Inggris') }}</option>
                                    <option>{{ __('IPS') }}</option>
                                    <option>{{ __('Prakarya') }}</option>
                                    <option>{{ __('PJOK') }}</option>
                                </select>
                                <div class="select-dropdown"></div>
                                @error('nama_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="nama_pelajaran" class="label">{{ __('Mata Pelajaran yang diajar (2) : ') }}</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="nama_pelajaran" id="nama_pelajaran" class="form-control @error('nama_pelajaran') is-invalid @enderror" name="nama_pelajaran" required autocomplete="nama_pelajaran">
                                    <option disabled="disabled" selected="selected">-- Pilih Mata Pelajaran --</option>
                                    <option>{{ __('Bahasa Indonesia') }}</option>
                                    <option>{{ __('Pendidikan Agama') }}</option>
                                    <option>{{ __('Matematika') }}</option>
                                    <option>{{ __('Seni Budaya') }}</option>
                                    <option>{{ __('IPA') }}</option>
                                    <option>{{ __('PKN') }}</option>
                                    <option>{{ __('Bahasa Inggris') }}</option>
                                    <option>{{ __('IPS') }}</option>
                                    <option>{{ __('Prakarya') }}</option>
                                    <option>{{ __('PJOK') }}</option>
                                </select>
                                <div class="select-dropdown"></div>
                                @error('nama_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="nama_pelajaran" class="label">{{ __('Mata Pelajaran yang diajar (3) : ') }}</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="nama_pelajaran" id="nama_pelajaran" class="form-control @error('nama_pelajaran') is-invalid @enderror" name="nama_pelajaran" required autocomplete="nama_pelajaran">
                                    <option disabled="disabled" selected="selected">-- Pilih Mata Pelajaran --</option>
                                    <option>{{ __('Bahasa Indonesia') }}</option>
                                    <option>{{ __('Pendidikan Agama') }}</option>
                                    <option>{{ __('Matematika') }}</option>
                                    <option>{{ __('Seni Budaya') }}</option>
                                    <option>{{ __('IPA') }}</option>
                                    <option>{{ __('PKN') }}</option>
                                    <option>{{ __('Bahasa Inggris') }}</option>
                                    <option>{{ __('IPS') }}</option>
                                    <option>{{ __('Prakarya') }}</option>
                                    <option>{{ __('PJOK') }}</option>
                                </select>
                                <div class="select-dropdown"></div>
                                @error('nama_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif


                         <!--UNTUK MIDDLEWARE SISWA-->
                         @if(auth()->user()->roles == 'Siswa')
                        <div class="input-group">
                            <label for="nisn_siswa" class="label">{{ __('NISN Siswa') }}</label>

                            <div class="col-md-6">
                                <input id="nisn_siswa" type="text" class="input--style-4 form-control @error('nisn_siswa') is-invalid @enderror" name="nisn_siswa" value="{{ old('nisn_siswa') }}"
                                required autocomplete="nisn_siswa" maxlength="10">

                                @error('nisn_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="kelass" class="label">{{ __('Kelas (Harap Pilih dengan Teliti!!!) : ') }}</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="kelass" id="kelass" class="form-control @error('kelass') is-invalid @enderror" name="kelass" required autocomplete="kelass">
                                <option disabled="disabled" selected="selected">-- Pilih Kelas --</option>
                                    <option>7-1</option>
                                    <option>7-2</option>
                                    <option>7-3</option>
                                    <option>7-4</option>
                                    <option>7-5</option>
                                    <option>7-6</option>
                                    <option>8-1</option>
                                    <option>8-2</option>
                                    <option>8-3</option>
                                    <option>8-4</option>
                                    <option>8-5</option>
                                    <option>8-6</option>
                                    <option>9-1</option>
                                    <option>9-2</option>
                                    <option>9-3</option>
                                    <option>9-4</option>
                                    <option>9-5</option>
                                    <option>9-6</option>
                                </select>
                                <div class="select-dropdown"></div>
                                @error('kelass')
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