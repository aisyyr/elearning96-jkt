<head>
     <title>Virtual Classroom - Materi</title>
</head>

@extends('masterdashboard')

@section('content')

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">File Materi / Tugas</h1>

          <div class="wrapper wrapper--w960 ml-1">
               <div class="card card-4">
                    <div class="card-body">
                         <h4>Judul</h4>
                         <h6 class="label" name="file_guru">{{ old('file_guru', $file_mtguru->file_guru)}}</h6>
                         <br>

                         <h4>Keterangan</h4>
                         <h6 class="label" name="keterangan">{{ old('keterangan', $file_mtguru->keterangan)}}</h6>
                         <br>

                         <h4>Jenis</h4>
                         <h6 class="label" name="jenis">{{ old('jenis', $file_mtguru->jenis)}}</h6>
                         <br>

                         <h4>Tanggal Unggah</h4>
                         <h6 class="label" name="tanggal_unggah">{{ old('tanggal_unggah', $file_mtguru->tanggal_unggah)}}</h6>
                         <br>

                         <h4>Pelajaran</h4>
                         <h6 class="label" name="pelajaran">{{ old('pelajaran', $file_mtguru->pelajaran)}}</h6>
                         <br>

                         <h4>Kelas</h4>
                         <h6 class="label" name="kelass">{{ old('kelass', $file_mtguru->kelass)}}</h6>
                         <br>

                         <h4>Nama Guru</h4>
                         <h6 class="label" name="nama_guru">{{ old('nama_guru', $file_mtguru->nama_guru)}}</h6>
                         <br>

                         <h4>File Materi / Tugas</h4>
                         <iframe src="{{ asset('file_mtguru/'. $file_mtguru->file_docm) }}" frameborder="2"  width="900" height="400"></iframe>
                    </div>
               </div>
          </div>
          
          <!-- <label class="label" for="file_guru">Judul</label>
          <input class="input--style-4" type="text" name="file_guru" value="{{ old('file_guru', $file_mtguru->file_guru)}}" disabled>
          @error('file_guru')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label class="label" for="keterangan">Keterangan</label>
          <input class="input--style-4" type="text" name="keterangan" value="{{ old('keterangan', $file_mtguru->keterangan)}}" disabled>
          @error('keterangan')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label class="label" for="pelajaran">Pelajaran</label>
          <input class="input--style-4" type="text" name="pelajaran" value="{{ old('pelajaran', $file_mtguru->pelajaran)}}" disabled>
          @error('pelajaran')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label class="label" for="kelass">Kelas</label>
          <input class="input--style-4" type="text" name="kelass" value="{{ old('kelass', $file_mtguru->kelass)}}" disabled>
          @error('kelass')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror -->
          
          <br><br>

@endsection