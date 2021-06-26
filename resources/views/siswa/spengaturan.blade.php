@extends('masterdashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-700">Pengaturan Akun Siswa</h1>

          <label class="label">Email Pengguna</label>
          <input class="input--style-4" type="email" name="email" maxlength="10" disabled="disabled">
          <a href="" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</span>
          </a>
          <a href="" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;</span>
          </a>

          <br>

          <label class="label">Password</label>
          <input class="input--style-4" type="text" name="pass" minlength="8" disabled="disabled">
          <a href="" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</span>
          </a>
          <a href="" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;</span>
          </a>

          <br>

          <label class="label">Kode Registrasi</label>
          <input class="input--style-4" type="text" name="kode" maxlength="10" disabled="disabled">
          <a href="" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</span>
          </a>
          <a href="" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;</span>
          </a>

     </div>
     <!-- /.container-fluid -->

@endsection