<head>
     <title>Pelajaran</title>
</head>

@extends('masterdashboard')

@section('content')

          <!-- Begin Page Content -->
          <div class="container-fluid" >

               <form role="form" action="/pelajaran-7" method="POST" enctype="multipart/form-data">
               @csrf
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-700">Tambah Mata Pelajaran</h1>
                    <label class="label" for="pelajaran_id">Nama Pelajaran</label>
                    <input class="input--style-4" type="text" name="pelajaran_id" value="{{ old('pelajaran_id'), '' }}">
                    @error('pelajaran_id')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="id_kelas">Id Kelas</label>
                    <input class="input--style-4" type="text" name="id_kelas" value="{{ old('id_kelas'), '' }}">
                    @error('keterangan')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <br>
                    <br>

                    <div>
                         <button type="submit" class="btn btn-primary btn-icon-split">Upload</button>
                    </div>
               </form>

          </div>
          <!-- /.container-fluid -->

@endsection