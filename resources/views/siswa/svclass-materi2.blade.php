@extends('masterdashboard')

@section('content')

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">File Materi / Tugas</h1>
          
          <label class="label" for="file_guru">Judul</label>
          <input class="input--style-4" type="text" name="file_guru" value="{{ old('file_guru', $file_mtguru->file_guru)}}" disabled>
          @error('file_guru')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label class="label" for="keterangan">Keterangan</label>
          <input class="input--style-4" type="text" name="keterangan" value="{{ old('keterangan', $file_mtguru->keterangan)}}" disabled>
          @error('keterangan')
               <div class="alert alert-danger">{{ $message }}</div>
          @enderror


          <br>
          <br>
          <br>

          <iframe src="" frameborder="2"  width="900" height="400"></iframe>
          <br><br>

@endsection