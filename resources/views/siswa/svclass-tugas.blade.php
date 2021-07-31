@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-700">Virtual Classroom - Tugas</h1>

     <a href="/vclass-materi" class="btn btn-primary btn-icon-split">
     <span class="text">&nbsp;&nbsp;&nbsp;Materi&nbsp;&nbsp;&nbsp;</span>
     </a>
     <a href="/vclass-tugas" class="btn btn-primary btn-icon-split">
     <span class="text">&nbsp;&nbsp;&nbsp;Tugas&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </a>

     <br>
     <br>

     <a href="/vclasstugas-unggah" class="btn btn-primary btn-icon-split">
          <span class="text">&nbsp;&nbsp;&nbsp;(+) Unggah File Tugas&nbsp;&nbsp;&nbsp;</span>
     </a>

     <br><br>

     @if(session('success'))
          <div class="alert alert-success">
          {{ session('success') }}
          </div>
     @endif

     <table class="table table-bordered">
     <thead>
     <tr>
          <th style="width: 10px">No.</th>
          <th>Judul Tugas</th>
          <th>Keterangan</th>
          <th>Pelajaran</th>
          <th>Tanggal Unggah</th>
          <th style="width: 40px">Pengaturan</th>
     </tr>
     </thead>
     <tbody>
     @foreach($file_tsiswa as $key => $file_tsiswa)
          <tr>
               <td>{{ $key + 1 }}</td>
               <td>{{ $file_tsiswa->file_tugas }}</td>
               <td>{{ $file_tsiswa->keterangan }}</td>
               <td>pelajaran</td>
               <td>{{ $file_tsiswa->tanggal_unggah}}</td>
               <td style="display:flex;">
                    <a href="/vclass-tugas/{{$file_tsiswa->id}}/edit" class="btn btn-primary">Ubah</a>&nbsp;
                    <form action="/vclass-tugas/{{$file_tsiswa->id}}" method="post">
                         @csrf
                         @method('DELETE')
                         <input type="submit" value="Hapus" class="btn btn-danger">
                    </form>
               </td>
          </tr>
     @endforeach
     </tbody>
     </table>


     </div>
     <!-- /.container-fluid -->

@endsection