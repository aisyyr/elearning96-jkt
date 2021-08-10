<head>
     <title>Virtual Classroom</title>
</head>

@extends('masterdashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid" >

<form role="form" action="/virtualclassroom1/{{$file_mtguru->id}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-700">Edit File Materi / Tugas</h1>
     <label class="label" for="file_guru">Judul</label>
     <input class="input--style-4" type="text" name="file_guru" value="{{ old('file_guru', $file_mtguru->file_guru)}}">
     @error('file_guru')
          <div class="alert alert-danger">{{ $message }}</div>
     @enderror

     <label class="label" for="keterangan">Keterangan</label>
     <input class="input--style-4" type="text" name="keterangan" value="{{ old('keterangan', $file_mtguru->keterangan)}}">
     @error('keterangan')
          <div class="alert alert-danger">{{ $message }}</div>
     @enderror

     <label class="label" for="tanggal_unggah">Tanggal Unggah</label>
     <input class="input--style-4" type="date" name="tanggal_unggah" value="{{ old('tanggal_unggah', $file_mtguru->tanggal_unggah)}}">
     @error('tanggal_unggah')
          <div class="alert alert-danger">{{ $message }}</div>
     @enderror

     <br><br>

     <label class="label" for="pelajaran">Pelajaran</label>
     <input class="input--style-4" type="text" name="pelajaran" value="{{ old('pelajaran', $file_mtguru->pelajaran)}}" disabled>

     <label class="label" for="kelass">Kelas</label>
     <input class="input--style-4" type="text" name="kelass" value="{{ old('kelass', $file_mtguru->kelass)}}" disabled>

     <label class="label" for="jenis">Jenis</label>
     <input class="input--style-4" type="text" name="jenis" value="{{ old('jenis', $file_mtguru->jenis)}}" disabled>

     <label class="label" for="nama_guru">Nama Guru</label>
     <input class="input--style-4" type="text" name="nama_guru" value="{{ old('nama_guru', $file_mtguru->nama_guru)}}" disabled>


     <br>

     

     <br><br>
     <div class="wrapper wrapper--w960 ml-1">
          <div class="card card-4">
               <div class="card-body">
                    <label class="label">&nbsp; Nama</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                         <select name="nama_guru">
                         <option disabled="disabled" selected="selected">-- Nama Guru --</option>
                              <option name="nama_guru" value="{{Auth::user()->name}}">{{ Auth::user()->name }}</option>
                         </select>
                         <div class="select-dropdown"></div>
                         @error('nama_guru')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <label class="label">&nbsp; Pelajaran*</label>
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

                    <label class="label">&nbsp; Kelas*</label>
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

                    <label class="label">&nbsp; Jenis*</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                         <select name="jenis">
                         <option disabled="disabled" selected="selected">-- Pilih Jenis File --</option>
                              <option name="jenis" value="materi">Materi</option>
                              <option name="jenis" value="tugas">Tugas</option>
                         </select>
                         <div class="select-dropdown"></div>
                         @error('jenis')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>
               </div>
          </div>
     </div>

          
     <br>
     <br>
     
     <iframe src="{{ asset('file_mtguru/'. $file_mtguru->file_docm) }}" frameborder="2"  width="900" height="400"></iframe>
     <br><br>
     
     <!-- <input type="file" href="" name="file_doc" accept="application/pdf" class="btn btn-primary btn-icon-split btn-sm">Unggah File</input>
     <br><br> -->

     <div>
          <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;</button>
     </div>
</form>

</div>
<!-- /.container-fluid -->


@endsection