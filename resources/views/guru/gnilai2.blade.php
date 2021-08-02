@extends('masterdashboard')

@section('content')

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">File Tugas Siswa</h1>
          
          <label class="label" for="file_tugas">Judul Tugas</label>
          <input class="input--style-4" type="text" name="file_tugas" value="{{ old('file_tugas', $file_tsiswa->file_tugas)}}" disabled>
          @error('file_tugas')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label class="label" for="keterangan">Keterangan Tugas</label>
          <input class="input--style-4" type="text" name="keterangan" value="{{ old('keterangan', $file_tsiswa->keterangan)}}" disabled>
          @error('keterangan')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label class="label" for="tanggal_unggah">Tanggal Unggah Tugas</label>
          <input class="input--style-4" type="date" name="tanggal_unggah" value="{{ old('tanggal_unggah', $file_tsiswa->tanggal_unggah)}}" disabled>
          @error('tanggal_unggah')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label class="label" for="kelass">Kelas</label>
          <input class="input--style-4" type="text" name="keterangan" value="{{ old('kelass', $file_tsiswa->kelass)}}" disabled>
          @error('kelass')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label class="label" for="pelajaran">Pelajaran</label>
          <input class="input--style-4" type="text" name="keterangan" value="{{ old('pelajaran', $file_tsiswa->pelajaran)}}" disabled>
          @error('pelajaran')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          
          <br>
          <br>

          <label class="label" for="subject">File Tugas Siswa</label>
          <iframe src="" frameborder="2"  width="900" height="400"></iframe>
          <br>
          <br>
          <hr>
          <br>

          <label class="label" for="keterangan">Komentar / Catatan Guru</label>
          <input class="input--style-4" type="text" name="keterangan" value="{{ old('keterangan'), ''}}" disabled>
          @error('keterangan')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label class="label" for="nilaitugas">Nilai Tugas</label>
          <input class="input--style-4" type="text" name="nilaitugas" value="{{ old('nilaitugas'), ''}}" disabled>
          @error('nilaitugas')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <br><br>

          <a href="" class="btn btn-primary">Grading Nilai Tugas Siswa</a>

          <br><br>

@endsection