@extends('masterdashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid" >

<form role="form" action="/vclass-tugas" method="POST" enctype="multipart/form-data">
@csrf
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-700">Unggah File Tugas</h1>
     <label class="label" for="file_tugas">Judul</label>
     <input class="input--style-4" type="text" name="file_tugas" value="{{ old('file_tugas'), '' }}">
     @error('file_tugas')
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

     <br><br>

          <label class="label">&nbsp; Pelajaran</label>
          <div class="rs-select2 js-select-simple select--no-search">
               <select name="pelajaran">
               <option disabled="disabled" selected="selected">-- Pilih Pelajaran --</option>
               @foreach($pelajaran as $pelajaran)
                    <option name="pelajaran" value="{{$pelajaran->nama_pelajaran}}">{{$pelajaran->nama_pelajaran}}</option>
               @endforeach
               </select>
               <div class="select-dropdown"></div>
          </div>

          <label class="label">&nbsp; Kelas</label>
          <div class="rs-select2 js-select-simple select--no-search">
               <select name="kelass">
               <option disabled="disabled" selected="selected">-- Pilih Kelas --</option>
               @foreach($kelas as $kelas)
                    <option name="kelass" value="{{$kelas->kelass}}">{{$kelas->kelass}}</option>
               @endforeach
               </select>
               <div class="select-dropdown"></div>
          </div>

          
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