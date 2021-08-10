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
                    
                    <label class="label">&nbsp; Mata Pelajaran 1 *</label>
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