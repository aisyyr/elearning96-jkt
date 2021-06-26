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
                                        <option>Bahasa Indonesia</option>
                                        <option>Pendidikan Agama</option>
                                        <option>Matematika</option>
                                        <option>Seni Budaya</option>
                                        <option>IPA</option>
                                        <option>PKN</option>
                                        <option>Bahasa Inggris</option>
                                        <option>IPS</option>
                                        <option>Prakarya</option>
                                        <option>PJOK</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                   </div>
                                   <label class="label">&nbsp; Kelas</label>
                                   <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                        <option disabled="disabled" selected="selected">-- Pilih Kelas --</option>
                                        <option>7-1</option>
                                        <option>7-2</option>
                                        <option>7-3</option>
                                        <option>7-4</option>
                                        <option>7-5</option>
                                        <option>7-6</option>
                                        <option>8-1</option>
                                        <option>8-2</option>
                                        <option>8-3</option>
                                        <option>8-4</option>
                                        <option>8-5</option>
                                        <option>8-6</option>
                                        <option>9-1</option>
                                        <option>9-2</option>
                                        <option>9-3</option>
                                        <option>9-4</option>
                                        <option>9-5</option>
                                        <option>9-6</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                   </div>
                                   <div class="p-t-30">
                                        <button class="btn btn--radius-2 btn--blue" type="submit">Pilih</button>
                                   </div>
                         </div>
                    </div>
               </div>
          </form>
     </div>
     <!-- End of Main Content -->

@endsection