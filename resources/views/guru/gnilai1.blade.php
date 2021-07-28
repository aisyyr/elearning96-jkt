@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Nilai Tugas Siswa</h1>

          <!-- /.container-fluid -->
          <form method="POST">
               <div class="wrapper wrapper--w960 ml-1">
                    <div class="card card-4">
                         <div class="card-body">
                              <label class="label">&nbsp; Pelajaran</label>
                                   <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                        <option disabled="disabled" selected="selected">-- Pilih Pelajaran --</option>
                                        @foreach($pelajaran as $mp)
                                             <option value="{{$mp->id}}">{{$mp->nama_pelajaran}}</option>
                                        @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                   </div>
                                   <label class="label">&nbsp; Kelas</label>
                                   <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                        <option disabled="disabled" selected="selected">-- Pilih Kelas --</option>
                                        @foreach($kelas as $kls)
                                             <option value="{{$kls->id}}">{{$kls->kelass}}</option>
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
     </div>
     <!-- End of Main Content -->

@endsection