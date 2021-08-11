<head>
     <title>Pelajaran</title>
</head>

@extends('masterdashboard')

@section('content')

          <!-- Begin Page Content -->
          <div class="container-fluid" >

               <form role="form" action="/pelajaran" method="POST" enctype="multipart/form-data">
               @csrf
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-700">Tambah Mata Pelajaran Baru</h1>

                    <label class="label" for="nama_pelajaran">Nama Pelajaran</label>
                    <input class="input--style-4" type="text" name="nama_pelajaran" value="{{ old('nama_pelajaran'), '' }}">
                    @error('nama_pelajaran')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <br>
                    <br>

                    <div>
                         <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
               </form>

          </div>
          <!-- /.container-fluid -->

@endsection