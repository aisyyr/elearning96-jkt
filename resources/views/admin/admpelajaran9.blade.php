@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Pelajaran Kelas 9</h1>

          <a href="/pelajaran-7" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;Kelas 7&nbsp;</span>
          </a>
          <a href="/pelajaran-8" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;Kelas 8&nbsp;</span>
          </a>
          <a href="/pelajaran-9" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;Kelas 9&nbsp;</span>
          </a>
          <br>
          <br>
          <a href="" class="btn btn-primary btn-icon-split">
               <span class="text">(+) Tambah Mata Pelajaran</span>
          </a>
     </div>
     <!-- /.container-fluid -->

@endsection