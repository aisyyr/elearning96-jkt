<head>
     <title>Virtual Classroom - Materi</title>
</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Virtual Classroom - Materi NamaPelajaran</h1>

          <a href="/vclass-materi" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Materi&nbsp;&nbsp;&nbsp;</span>
          </a>
          <a href="/vclass-tugas" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;Tugas&nbsp;&nbsp;&nbsp;&nbsp;</span>
          </a>

          <br><br>

          <form method="POST" action="">
          @csrf
          @method('GET')
               <div class="wrapper wrapper--w960 ml-1">
                    <div class="card card-4">
                         <div class="card-body">
                              <label class="label">&nbsp; Pelajaran</label>
                              <div class="rs-select2 js-select-simple select--no-search">
                                   <select name="subject">
                                   <option disabled="disabled" selected="selected">-- Pilih Pelajaran --</option>
                                   @foreach($pelajaran as $pelajaran)
                                        <option value="{{$pelajaran->id}}">{{$pelajaran->nama_pelajaran}}</option>
                                   @endforeach
                                   </select>
                                   <div class="select-dropdown"></div>
                              </div>
                              <label class="label">&nbsp; Kelas</label>
                              <div class="rs-select2 js-select-simple select--no-search">
                                   <select name="subject">
                                   <option disabled="disabled" selected="selected">-- Pilih Kelas --</option>
                                   @foreach($kelas as $kelas)
                                        <option value="{{$kelas->id}}">{{$kelas->kelass}}</option>
                                   @endforeach
                                   </select>
                                   <div class="select-dropdown"></div>
                              </div>
                              <br>
                              <br>
                              <div class="p-t-50 mt-20">
                                   <button class="btn btn-primary btn-icon-split" type="submit">&nbsp;&nbsp;&nbsp;Pilih&nbsp;&nbsp;&nbsp;</button>
                              </div>
                         </div>
                    </div>
               </div>
          </form>

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