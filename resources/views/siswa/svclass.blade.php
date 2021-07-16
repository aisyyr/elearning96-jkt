@extends('masterdashboard')

@section('content')

          <!-- Begin Page Content -->
          <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Virtual Classroom</h1>

          <!-- /.container-fluid -->
          <form method="POST">
               <div class="wrapper wrapper--w960 ml-1">
                    <div class="card card-4">
                         <div class="card-body">
                              <label class="label">Pelajaran</label>
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