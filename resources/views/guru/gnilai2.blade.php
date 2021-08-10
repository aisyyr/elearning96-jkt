<head>
     <title>Nilai Tugas Siswa</title>
</head>

@extends('masterdashboard')

@section('content')

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">File Tugas Siswa</h1>

          <form role="form" action="/nilaisiswa2/{{$file_tsiswa->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="wrapper wrapper--w960 ml-1">
               <div class="card card-4">
                    <div class="card-body">
                         <h4>Judul Tugas</h4>
                         <h6 class="label" name="file_tugas">{{ old('file_tugas', $file_tsiswa->file_tugas)}}</h6>
                         <br>

                         <h4>Keterangan</h4>
                         <h6 class="label" name="keterangan">{{ old('keterangan', $file_tsiswa->keterangan)}}</h6>
                         <br>

                         <h4>Tanggal Unggah</h4>
                         <h6 class="label" name="tanggal_unggah">{{ old('tanggal_unggah', $file_tsiswa->tanggal_unggah)}}</h6>
                         <br>

                         <h4>Pelajaran</h4>
                         <h6 class="label" name="pelajaran">{{ old('pelajaran', $file_tsiswa->pelajaran)}}</h6>
                         <br>

                         <h4>Kelas</h4>
                         <h6 class="label" name="kelass">{{ old('kelass', $file_tsiswa->kelass)}}</h6>
                         <br>

                         <h4>Nama Siswa</h4>
                         <h6 class="label" name="kelass">{{ old('nama_siswa', $file_tsiswa->nama_siswa)}}</h6>
                         <br>

                         <h4>File Tugas Siswa</h4>
                         <iframe src="{{ asset('file_tsiswa/'. $file_tsiswa->file_doct) }}" frameborder="2"  width="900" height="400"></iframe>
                         <br>
                         <h6 class="label" name="nilaitugas">&nbsp;Nilai : {{ old('nilaitugas', $file_tsiswa->nilaitugas)}}</h6>
                         <h6 class="label" name="komentar">&nbsp;Komentar : {{ old('komentar', $file_tsiswa->komentar)}}</h6>

                         <br>
                         <hr>
                         <br>
                         
                         <label class="label" for="komentar">Komentar / Catatan Guru</label>
                         <input class="input--style-4" type="text" name="komentar" value="{{ old('komentar'), '$file_tsiswa->komentar'}}">
                         @error('komentar')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror

                         <label class="label" for="nilaitugas">Nilai Tugas</label>
                         <input class="input--style-4" type="text" name="nilaitugas" value="{{ old('nilaitugas'), '$file_tsiswa->nilaitugas'}}" maxlength="3">
                         @error('nilaitugas')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                         <br><br>

                         <div>
                              <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Grading Nilai Tugas Siswa&nbsp;&nbsp;&nbsp;</button>
                         </div>
                    </div>
               </div>
          </div>

                    <!-- <label class="label" for="file_tugas">Judul Tugas</label>
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
                    @enderror -->
                    
     </form>

          <br><br>

@endsection