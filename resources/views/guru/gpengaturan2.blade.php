<head>
     <title>Pengaturan Akun Guru</title>
</head>

@extends('masterdashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-700">Pengaturan Akun Guru</h1>

     <form role="form" action="/pengaturan-guru/{{auth()->user()->id}}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <div class="wrapper wrapper--w960 ml-1">
          <div class="card card-4">
               <div class="card-body">
                    <label class="label">Email Pengguna</label>
                    <input class="input--style-4" type="email" name="email" maxlength="10" value="{{ auth()->user()->email }}">
                    &nbsp; &nbsp; &nbsp; 

                    <br>

                    <label class="label">Kode Registrasi</label>
                    <input class="input--style-4" type="text" name="kode_regist" value="{{ auth()->user()->kode_regist }}" maxlength="10">

                    <br><br>
                    
                    <label class="label">&nbsp; Mata Pelajaran yang diajar 1 *</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                         <select name="matapelajaran">
                         <option disabled="disabled" selected="selected">-- Pilih Mata Pelajaran --</option>
                         @foreach($pelajaran as $pelajaran)
                              <option name="matapelajaran" value="{{$pelajaran->nama_pelajaran}}">{{$pelajaran->nama_pelajaran}}</option>
                         @endforeach
                         </select>
                         <div class="select-dropdown"></div>
                         @error('matapelajaran')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <br>

                    <label class="label">&nbsp; Mata Pelajaran yang diajar 2</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                         <select name="matapelajaran2">
                              <option disabled="disabled" selected="selected">-- Pilih Mata Pelajaran 2 --</option>
                              <option name="matapelajaran2" value="Bahasa Indonesia">Bahasa Indonesia</option>
                              <option name="matapelajaran2" value="Pendidikan Agama">Pendidikan Agama</option>
                              <option name="matapelajaran2" value="Matematika">Matematika</option>
                              <option name="matapelajaran2" value="Seni Budaya">Seni Budaya</option>
                              <option name="matapelajaran2" value="IPA">IPA</option>
                              <option name="matapelajaran2" value="PKN">PKN</option>
                              <option name="matapelajaran2" value="Bahasa Inggris">Bahasa Inggris</option>
                              <option name="matapelajaran2" value="IPS">IPS</option>
                              <option name="matapelajaran2" value="Prakarya">Prakarya</option>
                              <option name="matapelajaran2" value="PJOK">PJOK</option>
                         </select>
                         <div class="select-dropdown"></div>
                         @error('matapelajaran2')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <br>

                    <label class="label">&nbsp; Mata Pelajaran yang diajar 3</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                         <select name="matapelajaran3">
                              <option disabled="disabled" selected="selected">-- Pilih Mata Pelajaran 3 --</option>
                              <option name="matapelajaran3" value="Bahasa Indonesia">Bahasa Indonesia</option>
                              <option name="matapelajaran3" value="Pendidikan Agama">Pendidikan Agama</option>
                              <option name="matapelajaran3" value="Matematika">Matematika</option>
                              <option name="matapelajaran3" value="Seni Budaya">Seni Budaya</option>
                              <option name="matapelajaran3" value="IPA">IPA</option>
                              <option name="matapelajaran3" value="PKN">PKN</option>
                              <option name="matapelajaran3" value="Bahasa Inggris">Bahasa Inggris</option>
                              <option name="matapelajaran3" value="IPS">IPS</option>
                              <option name="matapelajaran3" value="Prakarya">Prakarya</option>
                              <option name="matapelajaran3" value="PJOK">PJOK</option>
                         </select>
                         <div class="select-dropdown"></div>
                         @error('matapelajaran3')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <br>

                    <!-- <label class="label">Kode Registrasi</label>
                    <input class="input--style-4" type="text" name="kode_regist" maxlength="10">
                    <a href="" class="btn btn-primary btn-icon-split">
                         <span class="text">&nbsp;&nbsp;&nbsp;Ubah&nbsp;&nbsp;&nbsp;</span>
                    </a> -->

                    <div>
                         <button type="submit" class="btn btn-primary">&nbsp; &nbsp;Simpan&nbsp; &nbsp;</button>
                    </div>
               </div>
          </div>
     </div>
     </form>

</div>
<!-- /.container-fluid -->

@endsection