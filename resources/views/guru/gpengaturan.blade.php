<head>
     <title>Pengaturan Akun Guru</title>
</head>

@extends('masterdashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-700">Pengaturan Akun Guru</h1>

               @if(session('success'))
                    <div class="alert alert-success">
                    {{ session('success') }}
                    </div>
               @endif

          <label class="label">Email Pengguna</label>
          <input class="input--style-4" type="email" name="email" maxlength="10" value="{{ auth()->user()->email }}" disabled>
          &nbsp; &nbsp; &nbsp; 
          <a href="/pengaturan-guru/{{auth()->user()->id}}/edit" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Ubah&nbsp;&nbsp;&nbsp;</span>
          </a>

          <br>

          <label class="label">Kode Registrasi</label>
          <input class="input--style-4" type="text" name="name" value="{{ auth()->user()->kode_regist }}" disabled>

          <br><br>

          <label class="label">Mata Pelajaran 1</label>
          <input class="input--style-4" type="text" name="matapelajaran" value="{{ auth()->user()->matapelajaran }}" disabled>

          <br>

          <label class="label">Mata Pelajaran 2</label>
          <input class="input--style-4" type="text" name="matapelajaran2" value="{{ auth()->user()->matapelajaran2 }}" disabled>

          <br>

          <label class="label">Mata Pelajaran 3</label>
          <input class="input--style-4" type="text" name="matapelajaran3" value="{{ auth()->user()->matapelajaran3 }}" disabled>

          <!-- <label class="label">Kode Registrasi</label>
          <input class="input--style-4" type="text" name="kode_regist" maxlength="10">
          <a href="" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Ubah&nbsp;&nbsp;&nbsp;</span>
          </a> -->

</div>
<!-- /.container-fluid -->

@endsection