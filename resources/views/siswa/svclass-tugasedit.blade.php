@extends('masterdashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid" >

<form role="form" action="/vclass-tugas/{{$file_tsiswa->id}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-700">Edit File Tugas</h1>
     <label class="label" for="file_tugas">Judul</label>
     <input class="input--style-4" type="text" name="file_tugas" value="{{ old('file_tugas', $file_tsiswa->file_tugas)}}">
     @error('file_tugas')
          <div class="alert alert-danger">{{ $message }}</div>
     @enderror

     <label class="label" for="keterangan">Keterangan</label>
     <input class="input--style-4" type="text" name="keterangan" value="{{ old('keterangan', $file_tsiswa->keterangan)}}">
     @error('keterangan')
          <div class="alert alert-danger">{{ $message }}</div>
     @enderror

     <label class="label" for="tanggal_unggah">Tanggal Unggah</label>
     <input class="input--style-4" type="date" name="tanggal_unggah" value="{{ old('tanggal_unggah', $file_tsiswa->tanggal_unggah)}}">
     @error('tanggal_unggah')
          <div class="alert alert-danger">{{ $message }}</div>
     @enderror

     <br><br>

          
     <br>
     <br>

     <input type="file" href="" name="file_doct" class="btn btn-primary btn-icon-split btn-sm">Unggah File</input>
     <br><br>

     <div>
          <button type="submit" class="btn btn-primary btn-icon-split">Upload</button>
     </div>
</form>

</div>
<!-- /.container-fluid -->


@endsection