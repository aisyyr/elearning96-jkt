<head>
     <title>Pelajaran</title>
</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Pelajaran Kelas 8</h1>

          <a href="/pelajaran" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;Pelajaran&nbsp;</span>
          </a>
          <a href="/pelajaran-7" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;Kelas 7&nbsp;</span>
          </a>
          <a href="/pelajaran-8" class="btn btn-success btn-icon-split">
               <span class="text">&nbsp;Kelas 8&nbsp;</span>
          </a>
          <a href="/pelajaran-9" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;Kelas 9&nbsp;</span>
          </a>
          <br><br>

          <div class="wrapper wrapper--w960 ml-1">
          <div class="card card-4">
               <div class="card-body">
                    <div class="card-body">
                         <table class="table table-bordered">
                         <thead>
                         <tr>
                              <th style="width: 10px">No.</th>
                              <th>ID Pelajaran</th>
                              <th>ID Kelas</th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach($kelas_pelajaran as $key => $kelas_pelajaran)
                         <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $kelas_pelajaran->pelajaran_id }}</td>
                              <td>{{ $kelas_pelajaran->kelas_id }}</td>
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