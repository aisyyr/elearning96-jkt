@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Virtual Classroom</h1>

          <a href="/virtual-classroom" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;&nbsp;&nbsp;(+) Unggah File Materi / Tugas&nbsp;&nbsp;&nbsp;</span>
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

          <br>

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
                    <td>{{ $file_mtguru->pelajaran }}</td>
                    <td>{{ $file_mtguru->kelass }}</td>
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