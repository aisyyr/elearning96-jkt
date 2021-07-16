@extends('masterdashboard')

@section('content')

          <!-- Begin Page Content -->
          <div class="container-fluid" >

               <form role="form" action="/homesite-admin/{{$file_informasi->id}}" method="POST">
               @csrf
               @method('PUT')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-700">Edit File Informasi {{$file_informasi->id}}</h1>
                    <br>
                    <br>
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

                    <input type="file" href="" class="btn btn-primary btn-icon-split btn-sm">Unggah File</input>

                    <br>
                    <br>

                    <div>
                         <button type="submit" class="btn btn-primary btn-icon-split">Ubah</button>
                    </div>
               </form>

          </div>
          <!-- /.container-fluid -->

@endsection