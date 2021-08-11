<head>
     <title>Virtual Classroom - Materi</title>
</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Virtual Classroom - File Materi / Tugas Guru</h1>

          <a href="/vclass-materi" class="btn btn-success btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Materi / Tugas Guru&nbsp;&nbsp;&nbsp;</span>
          </a>
          <a href="/vclass-tugas" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Pengumpulan Tugas&nbsp;&nbsp;&nbsp;&nbsp;</span>
          </a>

          <br><br>

          <!-- <button type="button" id="Btn3" onclick="myFunction()">Klik2</button>
          <button type="button" id="Btn">Klik</button>
          <button type="button" id="Btn2">Klik</button>
          <script>
          function myFunction() {
          var y = document.getElementById("Btn2");
          y.disabled = true;
          var x = document.getElementById("Btn");
          x.disabled = true;
          }
          </script>
          <br><br> -->

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
                         <a class="dropdown-item" href="/bahasaindonesia1">Bahasa Indonesia</a>
                         <a class="dropdown-item" href="/pendidikanagama1">Pendidikan Agama</a>
                         <a class="dropdown-item" href="/matematika1">Matematika</a>
                         <a class="dropdown-item" href="/senibudaya1">Seni Budaya</a>
                         <a class="dropdown-item" href="/ipa1">Ilmu Pengetahuan Alam</a>
                         <a class="dropdown-item" href="/pkn1">Pendidikan Kewarganegaraan</a>
                         <a class="dropdown-item" href="/bahasainggris1">Bahasa Inggris</a>
                         <a class="dropdown-item" href="/ips1">Ilmu Pengetahuan Sosial</a>
                         <a class="dropdown-item" href="/prakarya1">Prakarya</a>
                         <a class="dropdown-item" href="/pjok1">PJOK</a>
                    </div>
                    </div>
               </div>
          </div>
          </div>

          <div class="mt-4 card-deck">

               @foreach($file_mtguru as $key => $file_mtguru)

               <?php
               if(($file_mtguru->kelass) == (auth()->user()->kelass)) { ?>

               <div class="col-md-4 mt-4">
                    <div class="card" style="width: 18rem; ">
                         <?php if(($file_mtguru->jenis) === 'materi') {
                              ?><img src="{{asset('admin/img/book.png')}}" class="card-img-top" alt="..."><?php ;
                         } else {
                              ?><img src="{{asset('admin/img/open-book.png')}}" class="card-img-top" alt="..."><?php ;
                         }
                         ?>
                         <div class="card-body">
                              <h5 class="card-title">{{ $file_mtguru->file_guru }} ( {{ $file_mtguru->nama_guru }} )</h5>
                              <h6 class="card-title"><b>{{ $file_mtguru->jenis }}</b></h6>
                              <h6 class="card-title">Pelajaran : {{ $file_mtguru->pelajaran }}</h6>
                              <h6 class="card-title">Kelas : {{ $file_mtguru->kelass }}</h6>
                              <div style="display: flex;">
                              <a href="/vclass-materi2/{{$file_mtguru->id}}" class="btn btn-primary">
                              <?php if(($file_mtguru->jenis) === 'materi') {
                                   echo "Lihat File Materi";
                              } else {
                                   echo "Lihat File Tugas";
                              } ?>
                              </a>
                              </div>
                         </div>
                    </div>
               </div>

               <?php ; } else {
                    echo '';
               } ?>

               @endforeach

          </div>

     </div>
     <!-- /.container-fluid -->

@endsection