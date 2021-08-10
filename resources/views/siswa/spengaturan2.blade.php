<head>
     <title>Pengaturan</title>
</head>

@extends('masterdashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-700">Pengaturan Akun Siswa</h1>

     <form role="form" action="/pengaturan-siswa/{{auth()->user()->id}}" method="POST" enctype="multipart/form-data">
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

                    <label class="label">&nbsp; Kelas</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                         <select name="kelass">
                         <option disabled="disabled" selected="selected">-- Pilih Kelas --</option>
                         @foreach($kelas as $kelas)
                              <option name="kelass" value="{{$kelas->kelass}}">{{$kelas->kelass}}</option>
                         @endforeach
                         </select>
                         <div class="select-dropdown"></div>
                         @error('kelass')
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