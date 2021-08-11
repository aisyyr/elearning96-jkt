<head>
     <title>Kode Registrasi</title>
</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Kode Registrasi Pengguna</h1>

          <div class="wrapper wrapper--w960 ml-1">
          <div class="card card-4">
               <div class="card-body"><br>
                    <div class="card-body">
                         <table class="table table-bordered">
                         <thead>
                         <tr>
                              <th style="width: 10px">No.</th>
                              <th>Hak Akses</th>
                              <th>Kode Registrasi</th>
                              <th style="width: 40px">Pengaturan</th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach($kode_registrasi as $key => $kode_registrasi)
                         <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $kode_registrasi->hak_akses }}</td>
                              <td>{{ $kode_registrasi->kode_regist }}</td>
                              <td style="display:flex;">
                                   <a href="/koderegistrasi/{{$kode_registrasi->id}}/edit" class="btn btn-primary">Ubah</a>
                              </td>
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