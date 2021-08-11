<head>
     <title>Homesite</title>
</head>

@extends('masterdashboard')

@section('content')

          <!-- Begin Page Content -->
          <div class="container-fluid" >

               <form role="form" action="/homesite-admin/{{$file_informasi->id}}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('PUT')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-700">Edit File Informasi</h1>
                    
                    <label class="label" for="judul">Judul</label>
                    <input class="input--style-4" type="text" name="file_info" value="{{ old('file_info', $file_informasi->file_info)}}">
                    @error('file_info')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="keterangan">Keterangan</label>
                    <input class="input--style-4" type="text" name="keterangan" value="{{ old('keterangan', $file_informasi->keterangan)}}">
                    @error('keterangan')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="tanggal_unggah">Tanggal Unggah</label>
                    <input class="input--style-4" type="date" name="tanggal_unggah" value="{{ old('tanggal_unggah', $file_informasi->tanggal_unggah)}}">
                    @error('tanggal_unggah')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <br>
                    <br>
                    <br>

                    <iframe src="{{ asset('file_info/'. $file_informasi->file_doc) }}" frameborder="2"  width="900" height="400"></iframe>
                    <br>
                    <br>

                    <br><br>

                    <div>
                         <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Ubah&nbsp;&nbsp;&nbsp;</button>
                    </div>
               </form>

          </div>
          <!-- /.container-fluid -->

@endsection