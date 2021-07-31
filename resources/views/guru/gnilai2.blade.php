@extends('masterdashboard')

@section('content')

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">File Tugas Siswa</h1>
          
          <label class="label" for="file_tugas">Judul</label>
          <input class="input--style-4" type="text" name="file_tugas" value="{{ old('file_tugas', $file_tsiswa->file_tugas)}}" disabled>
          @error('file_tugas')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label class="label" for="keterangan">Keterangan</label>
          <input class="input--style-4" type="text" name="keterangan" value="{{ old('keterangan', $file_tsiswa->keterangan)}}" disabled>
          @error('keterangan')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label class="label" for="tanggal_unggah">Tanggal Unggah</label>
          <input class="input--style-4" type="date" name="tanggal_unggah" value="{{ old('tanggal_unggah', $file_tsiswa->tanggal_unggah)}}" disabled>
          @error('tanggal_unggah')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          
          <br>
          <br>

          <iframe src="" frameborder="2"  width="900" height="400"></iframe>
          <br><br>

@endsection