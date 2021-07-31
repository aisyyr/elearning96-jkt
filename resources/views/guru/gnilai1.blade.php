@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Nilai Tugas Siswa</h1>

          <div class="mt-4 card-deck">

               @foreach($file_tsiswa as $key => $file_tsiswa)
               <div class="col-md-4 mt-4">
                    <div class="card" style="width: 18rem; ">
                         <img src="{{asset('admin/img/book.png')}}" class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">{{ $file_tsiswa->file_tugas }}</h5>
                              <h6 class="card-title">{{ $key + 1 }}</h5>
                              <p class="card-text">{{ $file_tsiswa->keterangan }}</p>
                              <div style="display: flex;">
                              <a href="/nilaisiswa2/{{ $file_tsiswa->id}}" class="btn btn-primary">Lihat File Tugas</a>
                              </div>
                         </div>
                    </div>
               </div>
               @endforeach

          </div>

     </div>
     <!-- /.container-fluid -->

@endsection