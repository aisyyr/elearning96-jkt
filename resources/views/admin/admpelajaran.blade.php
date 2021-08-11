@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Pelajaran</h1>

          <a href="/pelajaran" class="btn btn-success btn-icon-split">
               <span class="text">&nbsp;Pelajaran&nbsp;</span>
          </a>
          <a href="/pelajaran-7" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;Kelas 7&nbsp;</span>
          </a>
          <a href="/pelajaran-8" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;Kelas 8&nbsp;</span>
          </a>
          <a href="/pelajaran-9" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;Kelas 9&nbsp;</span>
          </a>
          <br><br>

          <div class="wrapper wrapper--w960 ml-1">
          <div class="card card-4">
               <div class="card-body">
               <h4>Tabel Mata Pelajaran : </h4>
               <br>
               <a href="/tambah-pelajaran" class="btn btn-primary btn-icon-split">
                    <span class="text">(+) Tambah Mata Pelajaran</span>
               </a><br>
                    <div class="card-body">
                         <table class="table table-bordered">
                         <thead>
                         <tr>
                              <th>ID Pelajaran</th>
                              <th>Nama Pelajaran</th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach($pelajaran as $key => $pelajaran)
                         <tr>
                              <td>{{ $pelajaran->id }}</td>
                              <td>{{ $pelajaran->nama_pelajaran }}</td>
                         </tr>
                         @endforeach
                         </tbody>
                         </table>
                    </div>
               </div>
          </div>
          </div>

          <br>
          <hr>
          <br>

          <div class="wrapper wrapper--w960 ml-1">
          <div class="card card-4">
               <div class="card-body">
               <h4>Tabel Kelas : </h4>
                    <div class="card-body">
                         <table class="table table-bordered">
                         <thead>
                         <tr>
                              <th width="10px">ID Kelas</th>
                              <th width="10px">Kelas</th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach($kelas as $key => $kelas)
                         <tr>
                              <td>{{ $kelas->id }}</td>
                              <td>{{ $kelas->kelass }}</td>
                         </tr>
                         @endforeach
                         </tbody>
                         </table>
                    </div>
               </div>
          </div>
          </div>

     </div>
     <!-- /.container-fluid -->

@endsection