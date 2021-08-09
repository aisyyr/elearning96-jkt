<head>
     <title>Virtual Classroom - Materi</title>
</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Virtual Classroom - Materi</h1>

          <a href="/vclass-materi" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Materi / Tugas Guru&nbsp;&nbsp;&nbsp;</span>
          </a>
          <a href="/vclass-tugas" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Pengumpulan Tugas&nbsp;&nbsp;&nbsp;&nbsp;</span>
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
                         <a class="dropdown-item" href="/vclass-materi">Semua Pelajaran</a>
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

          <div class="mt-4 card-deck">

               @foreach($file_mtguru as $key => $file_mtguru)
               <div class="col-md-4 mt-4">
                    <div class="card" style="width: 18rem; ">
                         <img src="{{asset('admin/img/book.png')}}" class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">{{ $file_mtguru->file_guru }}</h5>
                              <h6 class="card-title">Pelajaran : {{ $file_mtguru->pelajaran }}</h6>
                              <h6 class="card-title">Kelas : {{ $file_mtguru->kelass }}</h6>
                              <p class="card-text">{{ $file_mtguru->keterangan }}</p>
                              <div style="display: flex;">
                              <a href="/vclass-materi2/{{$file_mtguru->id}}" class="btn btn-primary">Lihat File Materi/Tugas</a>
                              </div>
                         </div>
                    </div>
               </div>
               @endforeach

          </div>

     </div>
     <!-- /.container-fluid -->

@endsection