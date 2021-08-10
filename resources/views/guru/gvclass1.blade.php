<head>
     <title>Virtual Classroom</title>
</head>


@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Virtual Classroom</h1>

          <a href="/virtual-classroom" class="btn btn-success btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;(+) Unggah File Materi / Tugas&nbsp;&nbsp;&nbsp;</span>
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
                         <a class="dropdown-item" href="/virtualclassroom1">Semua Pelajaran</a>
                         <a class="dropdown-item" href="/bahasaindonesia">Bahasa Indonesia</a>
                         <a class="dropdown-item" href="/pendidikanagama">Pendidikan Agama</a>
                         <a class="dropdown-item" href="/matematika">Matematika</a>
                         <a class="dropdown-item" href="/senibudaya">Seni Budaya</a>
                         <a class="dropdown-item" href="/ipa">Ilmu Pengetahuan Alam</a>
                         <a class="dropdown-item" href="/pkn">Pendidikan Kewarganegaraan</a>
                         <a class="dropdown-item" href="/bahasainggris">Bahasa Inggris</a>
                         <a class="dropdown-item" href="/ips">Ilmu Pengetahuan Sosial</a>
                         <a class="dropdown-item" href="/prakarya">Prakarya</a>
                         <a class="dropdown-item" href="/pjok">PJOK</a>
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
               <th>Judul Materi / Tugas</th>
               <th>Keterangan</th>
               <th>Pelajaran</th>
               <th>Jenis</th>
               <th>Kelas</th>
               <th>Tanggal Unggah</th>
               <th style="width: 40px">Pengaturan</th>
          </tr>
          </thead>
          <tbody>
          @foreach($file_mtguru as $key => $file_mtguru)
               <?php
               if((($file_mtguru->nama_guru) !== Auth::user()->name)) {
                    echo ' ';
               } else { ?>
               <tr>
                    <td>{{ $file_mtguru->file_guru }}</td>
                    <td>{{ $file_mtguru->keterangan }}</td>
                    <td>{{ $file_mtguru->pelajaran }}</td>
                    <td>{{ $file_mtguru->jenis }}</td>
                    <td>{{ $file_mtguru->kelass }}</td>
                    <td>{{ $file_mtguru->tanggal_unggah }}</td>
                    <td style="display:flex;">
                         <a href="/virtualclassroom1/{{$file_mtguru->id}}/edit" class="btn btn-primary btn-icon-split">
                              <span class="text">Ubah</span>
                         </a>&nbsp;
                         <form action="/virtualclassroom1/{{$file_mtguru->id}}" method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" value="Hapus" class="btn btn-danger">
                         </form>
                    </td>
               </tr>
               <?php ; } ?>
          @endforeach
          </tbody>
          </table>

     </div>
     <!-- /.container-fluid -->

@endsection