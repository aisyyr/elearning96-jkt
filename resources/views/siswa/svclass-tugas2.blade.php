<head>
     <title>Virtual Classroom - Tugas</title>
</head>

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

     <!-- <label class="label" for="nama_siswa">Nama Siswa</label>
     <input class="input--style-4" type="text" name="nama_siswa" value="{{ old('nama_siswa'), '' }}">
     @error('nama_siswa')
          <div class="alert alert-danger">{{ $message }}</div>
     @enderror -->

     <label class="label" for="tanggal_unggah">Tanggal Unggah</label>
     <input class="input--style-4" type="date" name="tanggal_unggah" value="{{ old('tanggal_unggah'), '' }}">
     @error('tanggal_unggah')
          <div class="alert alert-danger">{{ $message }}</div>
     @enderror

     <br><br>
     <div class="wrapper wrapper--w960 ml-1">
          <div class="card card-4">
               <div class="card-body">
                    <label class="label">&nbsp; Nama</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                         <select name="nama_siswa">
                         <option disabled="disabled" selected="selected">-- Nama Siswa --</option>
                              <option name="nama_siswa" value="{{Auth::user()->name}}">{{ Auth::user()->name }}</option>
                         </select>
                         <div class="select-dropdown"></div>
                         @error('nama_siswa')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    
                    <label class="label">&nbsp; Pelajaran</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                         <select name="pelajaran">
                         <option disabled="disabled" selected="selected">-- Pilih Pelajaran --</option>
                         @foreach($pelajaran as $pelajaran)
                              <option name="pelajaran" value="{{$pelajaran->nama_pelajaran}}">{{$pelajaran->nama_pelajaran}}</option>
                         @endforeach
                         </select>
                         <div class="select-dropdown"></div>
                         @error('pelajaran')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
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
                         @error('kelass')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

               </div>
         </div>
     </div>

          
     <br>

     <input type="file" href="" name="file_doct" accept="application/pdf" class="btn btn-primary btn-icon-split btn-sm">Unggah File</input>
     @error('file_doct')
          <div class="alert alert-danger">{{ $message }}</div>
     @enderror
     <br><br>

     <div>
          <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Unggah&nbsp;&nbsp;&nbsp;</button>
     </div>
</form>

</div>
<!-- /.container-fluid -->


@endsection