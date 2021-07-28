@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Virtual Classroom - Materi</h1>

          <a href="/vclass-materi" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Materi&nbsp;&nbsp;&nbsp;</span>
          </a>
          <a href="/vclass-tugas" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Tugas&nbsp;&nbsp;&nbsp;&nbsp;</span>
          </a>

          <div class="mt-4 card-deck">

               @foreach($file_mtguru as $key => $file_mtguru)
               <div class="col-md-4 mt-4">
                    <div class="card" style="width: 18rem; ">
                         <img src="{{asset('admin/img/book.png')}}" class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">{{ $file_mtguru->file_guru }}</h5>
                              <h6 class="card-title">{{ $key + 1 }}</h5>
                              <p class="card-text">{{ $file_mtguru->keterangan }}</p>
                              <div style="display: flex;">
                              <a href="" class="btn btn-primary">Lihat File Materi/Tugas</a>
                              </div>
                         </div>
                    </div>
               </div>
               @endforeach

          </div>

     </div>
     <!-- /.container-fluid -->

@endsection