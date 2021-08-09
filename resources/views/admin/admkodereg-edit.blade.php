<head>
     <title>Kode Registrasi</title>
</head>

@extends('masterdashboard')

@section('content')

          <!-- Begin Page Content -->
          <div class="container-fluid" >

               <form role="form" action="/koderegistrasi/{{$kode_registrasi->hak_akses}}" method="POST">
               @csrf
               @method('PUT')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-700">Edit Kode Registrasi {{$kode_registrasi->hak_akses}}</h1>
                    <br>
                    <br>
                    <label class="label" for="hak_akses">Hak Akses</label>
                    <input class="input--style-4" type="text" name="hak_akses" value="{{ old('hak_akses', $kode_registrasi->hak_akses)}}">
                    @error('hak_akses')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="kode_regist">Kode Registrasi</label>
                    <input class="input--style-4" type="text" name="kode_regist" value="{{ old('kode_regist', $kode_registrasi->kode_regist)}}"
                    maxlength="10">
                    @error('kode_regist')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <br>
                    <br>
                    <br>

                    <div>
                         <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
               </form>

          </div>
          <!-- /.container-fluid -->

@endsection