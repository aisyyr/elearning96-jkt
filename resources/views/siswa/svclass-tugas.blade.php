<head>
     <title>Virtual Classroom - Tugas</title>
</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-700">Virtual Classroom - Tugas NamaPelajaran</h1>

     <a href="/vclass-materi" class="btn btn-primary btn-icon-split">
     <span class="text">&nbsp;&nbsp;&nbsp;Materi&nbsp;&nbsp;&nbsp;</span>
     </a>
     <a href="/vclass-tugas" class="btn btn-primary btn-icon-split">
     <span class="text">&nbsp;&nbsp;&nbsp;Tugas&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </a>

     <br>
     <br>

     <form method="POST" action="">
          @csrf
          @method('GET')
               <div class="wrapper wrapper--w960 ml-1">
                    <div class="card card-4">
                         <div class="card-body">
                              <label class="label">&nbsp; Pelajaran</label>
                                   <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                        <option disabled="disabled" selected="selected">-- Pilih Pelajaran --</option>
                                        @foreach($pelajaran as $pelajaran)
                                             <option value="{{$pelajaran->id}}">{{$pelajaran->nama_pelajaran}}</option>
                                        @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                   </div>
                                   <label class="label">&nbsp; Kelas</label>
                                   <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                        <option disabled="disabled" selected="selected">-- Pilih Kelas --</option>
                                        @foreach($kelas as $kelas)
                                             <option value="{{$kelas->id}}">{{$kelas->kelass}}</option>
                                        @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                   </div>
                                   <br>
                                   <br>
                                   <div class="p-t-50 mt-20">
                                        <button class="btn btn-primary btn-icon-split" type="submit">&nbsp;&nbsp;&nbsp;Pilih&nbsp;&nbsp;&nbsp;</button>
                                   </div>
                         </div>
                    </div>
               </div>
          </form>

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
          <th>Pelajaran</th>
          <th>Kelas</th>
          <th>Tanggal Unggah</th>
          <th style="width: 40px">Pengaturan</th>
          <th>Nilai Tugas</th>
          <th>Catatan Guru</th>
     </tr>
     </thead>
     <tbody>
     @foreach($file_tsiswa as $key => $file_tsiswa)
          <tr>
               <td>{{ $key + 1 }}</td>
               <td>{{ $file_tsiswa->file_tugas }}</td>
               <td>{{ $file_tsiswa->pelajaran }}</td>
               <td>{{ $file_tsiswa->kelass }}</td>
               <td>{{ $file_tsiswa->tanggal_unggah}}</td>
               <td style="display:flex;">
                    <a href="/vclass-tugas/{{$file_tsiswa->id}}/edit" class="btn btn-primary">Ubah</a>&nbsp;
                    <form action="/vclass-tugas/{{$file_tsiswa->id}}" method="post">
                         @csrf
                         @method('DELETE')
                         <input type="submit" value="Hapus" class="btn btn-danger">
                    </form>
               </td>
               <td>{{ $file_tsiswa->nilaitugas }}</td>
               <td>{{ $file_tsiswa->komentar }}</td>
          </tr>
     @endforeach
     </tbody>
     </table>


     </div>
     <!-- /.container-fluid -->

@endsection