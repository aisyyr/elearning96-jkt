<head>
     <title>Nilai Tugas Siswa</title>
</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Nilai Tugas Siswa</h1>

          <br>

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
                         <a class="dropdown-item" href="/nilaisiswa">Semua Pelajaran</a>
                         <a class="dropdown-item" href="/bahasaindonesia2">Bahasa Indonesia</a>
                         <a class="dropdown-item" href="/pendidikanagama2">Pendidikan Agama</a>
                         <a class="dropdown-item" href="/matematika2">Matematika</a>
                         <a class="dropdown-item" href="/senibudaya2">Seni Budaya</a>
                         <a class="dropdown-item" href="/ipa2">Ilmu Pengetahuan Alam</a>
                         <a class="dropdown-item" href="/pkn2">Pendidikan Kewarganegaraan</a>
                         <a class="dropdown-item" href="/bahasainggris2">Bahasa Inggris</a>
                         <a class="dropdown-item" href="/ips2">Ilmu Pengetahuan Sosial</a>
                         <a class="dropdown-item" href="/prakarya2">Prakarya</a>
                         <a class="dropdown-item" href="/pjok2">PJOK</a>
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

          <br>

          <table class="table table-bordered">
          <thead>
          <tr>
               <th>Nama Siswa</th>
               <th>Judul Tugas</th>
               <th>Pelajaran</th>
               <th>Kelas</th>
               <th>Tanggal Unggah</th>
               <th style="width: 40px">Selengkapnya</th>
               <th>Nilai</th>
               <th>Catatan Guru</th>
          </tr>
          </thead>
          <tbody>
          @foreach($file_tsiswa as $key => $file_tsiswa)
          <?php 
               if((($file_tsiswa->pelajaran) !== Auth::user()->matapelajaran) && (($file_tsiswa->pelajaran) !== Auth::user()->matapelajaran2) && (($file_tsiswa->pelajaran) !== Auth::user()->matapelajaran3)) {
                    echo ' ';
               } else { ?>
               <tr>
                    <td>{{ $file_tsiswa->nama_siswa}}</td>
                    <td>{{ $file_tsiswa->file_tugas }}</td>
                    <td>{{ $file_tsiswa->pelajaran }}</td>
                    <td>{{ $file_tsiswa->kelass }}</td>
                    <td>{{ $file_tsiswa->tanggal_unggah }}</td>
                    <td style="display:flex;">
                         <a href="/nilaisiswa2/{{ $file_tsiswa->id }}/edit" class="btn btn-primary">Lihat File</a>&nbsp;
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