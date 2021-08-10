<head>
     <title>Homesite</title>
</head>

@extends('masterdashboard')

@section('content')

          <!-- Begin Page Content -->
          <div class="container-fluid" >

               <form role="form" action="/homesite-admin" method="POST" enctype="multipart/form-data">
               @csrf
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-700">Unggah File Informasi</h1>
                    <label class="label" for="judul">Judul</label>
                    <input class="input--style-4" type="text" name="file_info" value="{{ old('file_info'), '' }}">
                    @error('file_info')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="keterangan">Keterangan</label>
                    <input class="input--style-4" type="text" name="keterangan" value="{{ old('keterangan'), '' }}">
                    @error('keterangan')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="tanggal_unggah">Tanggal Unggah</label>
                    <input class="input--style-4" type="date" name="tanggal_unggah" value="{{ old('tanggal_unggah'), '' }}">
                    @error('tanggal_unggah')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <br>
                    <br>
                    <br>
                    
                    <input type="file" name="file_doc" accept="application/pdf" class="btn btn-primary btn-icon-split btn-sm">Unggah File</input>

                    <br>
                    <br>

                    <div>
                         <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Unggah File&nbsp;&nbsp;&nbsp;</button>
                    </div>
               </form>

          </div>
          <!-- /.container-fluid -->

@endsection