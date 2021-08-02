<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  

</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Nilai Tugas Siswa</h1>

          <form method="POST" action="/searched">
          @csrf
          @method('GET')
               <div class="wrapper wrapper--w960 ml-1">
                    <div class="card card-4">
                         <div class="card-body">
                              <label class="label">&nbsp; Pelajaran</label>
                              <div class="rs-select2 js-select-simple select--no-search">
                                   <select name="pelajaran">
                                   <option disabled="disabled" selected="selected">-- Pilih Pelajaran --</option>
                                   @foreach($pelajaran as $pelajaran)
                                        <option name="pelajaran" value="{{$pelajaran->nama_pelajaran}}">{{$pelajaran->nama_pelajaran}}</option>
                                   @endforeach
                                   </select>
                                   <div class="select-dropdown"></div>
                              </div>
                              <label class="label">&nbsp; Kelas</label>
                              <div class="rs-select2 js-select-simple select--no-search">
                                   <select name="kelas">
                                   <option disabled="disabled" selected="selected">-- Pilih Kelas --</option>
                                   @foreach($kelas as $kelas)
                                        <option name="kelas" value="{{$kelas->kelass}}">{{$kelas->kelass}}</option>
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

          <table class="table table-bordered">
          <thead>
          <tr>
               <th style="width: 10px">No.</th>
               <th>Judul Tugas</th>
               <th>Keterangan Tugas</th>
               <th>Pelajaran</th>
               <th>Kelas</th>
               <th style="width: 40px">Selengkapnya</th>
               <th>Nilai</th>
               <th>Catatan Guru</th>
          </tr>
          </thead>
          <tbody>
          @foreach($file_tsiswa as $key => $file_tsiswa)
               <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $file_tsiswa->file_tugas }}</td>
                    <td>{{ $file_tsiswa->keterangan }}</td>
                    <td>{{ $file_tsiswa->pelajaran }}</td>
                    <td>{{ $file_tsiswa->kelass }}</td>
                    <td style="display:flex;">
                         <a href="/nilaisiswa2/{{ $file_tsiswa->id }}" class="btn btn-primary">Lihat File</a>&nbsp;
                    </td>
                    <td>...</td>
                    <td>Komentar Guru</td>
               </tr>

          @endforeach
          </tbody>
          </table>

     </div>
     <!-- /.container-fluid -->

@endsection