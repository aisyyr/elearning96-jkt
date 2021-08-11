<head>
     <title>Pelajaran</title>
</head>

@extends('masterdashboard')

@section('content')

          <!-- Begin Page Content -->
          <div class="container-fluid" >

               <form role="form" action="/pelajaran-7" method="POST" enctype="multipart/form-data">
               @csrf
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-700">Tambah Mata Pelajaran Baru</h1>

                    <div class="wrapper wrapper--w960 ml-1">
                         <div class="card card-4">
                              <div class="card-body">
                                   <label class="label">&nbsp; ID Pelajaran</label>
                                   <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="pelajaran_id">
                                        <option disabled="disabled" selected="selected">-- Pilih ID Pelajaran --</option>
                                        @foreach($pelajaran as $pelajaran)
                                             <option name="pelajaran_id" value="{{$pelajaran->id}}">{{$pelajaran->id}}</option>
                                        @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                        @error('pelajaran_id')
                                             <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                   </div>

                                   <label class="label">&nbsp; ID Kelas</label>
                                   <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="kelas_id">
                                        <option disabled="disabled" selected="selected">-- Pilih ID Kelas --</option>
                                        @foreach($kelas as $kelas)
                                             <option name="kelas_id" value="{{$kelas->id}}">{{$kelas->id}}</option>
                                        @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                        @error('kelas_id')
                                             <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                   </div>

                                   <br>
                                   <br>

                                   <div>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                   </div>
                              </div>
                         </div>
                    </div>
               </form>

          </div>
          <!-- /.container-fluid -->

@endsection