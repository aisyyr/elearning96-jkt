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
          <label class="label">Email Pengguna</label>
          <input class="input--style-4" type="email" name="email" maxlength="10" value="{{ auth()->user()->email }}">
          &nbsp; &nbsp; &nbsp; 

          <br>

          <label class="label">Nama</label>
          <input class="input--style-4" type="text" name="name" value="{{ auth()->user()->name }}" >

          <br>
          <label class="label">NISN Siswa</label>
          <input class="input--style-4" type="text" name="penggunaid" value="{{ auth()->user()->penggunaid }}" maxlength="10">

          <br>

          <label class="label">Kode Registrasi</label>
          <input class="input--style-4" type="text" name="kode_regist" value="{{ auth()->user()->kode_regist }}" maxlength="10">

          <br><br><br>

          <!-- <label class="label">Kode Registrasi</label>
          <input class="input--style-4" type="text" name="kode_regist" maxlength="10">
          <a href="" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Ubah&nbsp;&nbsp;&nbsp;</span>
          </a> -->

          <div>
               <button type="submit" class="btn btn-primary btn-icon-split">&nbsp; &nbsp;Simpan&nbsp; &nbsp;</button>
          </div>

     </form>

</div>
<!-- /.container-fluid -->

@endsection