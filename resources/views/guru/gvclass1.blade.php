@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Virtual Classroom</h1>

          <a href="/virtual-classroom" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Unggah File Materi / Tugas&nbsp;&nbsp;&nbsp;</span>
          </a>
          <br><br>

          @if(session('success'))
               <div class="alert alert-success">
               {{ session('success') }}
               </div>
          @endif

          <br>

          <table class="table table-bordered">
          <thead>
          <tr>
               <th style="width: 10px">No.</th>
               <th>Keterangan</th>
               <th>Kelas</th>
               <th>Pelajaran</th>
               <th style="width: 40px">Pengaturan</th>
          </tr>
          </thead>
          <tbody>
          @foreach($file_mtguru as $key => $file_mtguru)
               <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $file_mtguru->keterangan }}</td>
                    <td>kelas</td>
                    <td>pelajaran</td>
                    <td style="display:flex;">
                         <a href="/virtualclassroom1/{{$file_mtguru->id}}/edit" class="btn btn-primary">Ubah</a>&nbsp;
                         <form action="/virtualclassroom1/{{$file_mtguru->id}}" method="post">
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