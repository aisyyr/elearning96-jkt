<head>
     <title>Virtual Classroom - Tugas</title>
</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-700">Virtual Classroom - Pengumpulan Tugas</h1>

     <a href="/vclass-materi" class="btn btn-primary btn-icon-split">
     <span class="text">&nbsp;&nbsp;&nbsp;Materi / Tugas Guru&nbsp;&nbsp;&nbsp;</span>
     </a>
     <a href="/vclass-tugas" class="btn btn-success btn-icon-split">
     <span class="text">&nbsp;&nbsp;&nbsp;Pengumpulan Tugas&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </a>

     <br><br>

     <a href="/vclasstugas-unggah" class="btn btn-warning btn-icon-split">
          <span class="text">&nbsp;&nbsp;(+) Unggah File Tugas&nbsp;&nbsp;</span>
     </a>

     <br><br>

     <div class="wrapper wrapper--w960 ml-1">
          <div class="card card-4">
               <div class="card-body">
               <h4>Pilih Mata Pelajaran :</h4><br>
                    <div class="dropdown mb-4">
                    <button class="btn btn-primary dropdown-toggle btn-md" type="button"
                         id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false">
                         -- mata pelajaran --
                    </button>
                    <div class="dropdown-menu animated--fade-in"
                         aria-labelledby="dropdownMenuButton">
                         <a class="dropdown-item" href="/vclass-tugas">Semua Pelajaran</a>
                         <a class="dropdown-item" href="/bahasaindonesia3">Bahasa Indonesia</a>
                         <a class="dropdown-item" href="/pendidikanagama3">Pendidikan Agama</a>
                         <a class="dropdown-item" href="/matematika3">Matematika</a>
                         <a class="dropdown-item" href="/senibudaya3">Seni Budaya</a>
                         <a class="dropdown-item" href="/ipa3">Ilmu Pengetahuan Alam</a>
                         <a class="dropdown-item" href="/pkn3">Pendidikan Kewarganegaraan</a>
                         <a class="dropdown-item" href="/bahasainggris3">Bahasa Inggris</a>
                         <a class="dropdown-item" href="/ips3">Ilmu Pengetahuan Sosial</a>
                         <a class="dropdown-item" href="/prakarya3">Prakarya</a>
                         <a class="dropdown-item" href="/pjok3">PJOK</a>
                    </div>
                    </div>
               </div>
          </div>
          </div>

          <br>

     @if(session('success'))
          <div class="alert alert-success">
          {{ session('success') }}
          </div>
     @endif

     <table class="table table-bordered">
     <thead>
     <tr>
          <th>Nama Siswa</th>
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
          <?php 
          if(($file_tsiswa->nama_siswa) !== Auth::user()->name ) {
               echo ' ';
          } else {
          ?>
          <tr> 
               <td>{{ $file_tsiswa->nama_siswa }}</td>
               <td>{{ $file_tsiswa->file_tugas }}</td>
               <td>{{ $file_tsiswa->pelajaran }}</td>
               <td>{{ $file_tsiswa->kelass }}</td>
               <td>{{ $file_tsiswa->tanggal_unggah}}</td>
               <td style="display:flex;"><?php
               if(!empty($file_tsiswa->nilaitugas) && !empty($file_tsiswa->komentar)) {
                    echo '<a href="" class="btn btn-primary disabled">Ubah</a>&nbsp;
                         <a href="" class="btn btn-danger disabled">Hapus</a>&nbsp;';
               } else {
                    ?><a href="/vclass-tugas/{{$file_tsiswa->id}}/edit" class="btn btn-primary">Ubah</a>&nbsp;
                    <form action="/vclass-tugas/{{$file_tsiswa->id}}" method="post">
                         @csrf
                         @method('DELETE')
                         <input type="submit" value="Hapus" class="btn btn-danger">
                    </form>
               <?php ; } ?>
               </td>
               <td>{{ $file_tsiswa->nilaitugas }}</td>
               <td>{{ $file_tsiswa->komentar }}</td>
          </tr>
          <?php ; } ?>
     @endforeach
     </tbody>
     </table>


     </div>
     <!-- /.container-fluid -->

@endsection