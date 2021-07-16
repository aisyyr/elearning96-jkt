@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-700">Virtual Classroom - Tugas</h1>
     <h1 class="h4 mb-4 text-gray-700">Mata Pelajaran : NamaPelajaran</h1>

     <a href="#" class="btn btn-primary btn-icon-split">
     <span class="text">&nbsp;&nbsp;&nbsp;Materi&nbsp;&nbsp;&nbsp;</span>
     </a>
     <a href="#" class="btn btn-primary btn-icon-split">
     <span class="text">&nbsp;&nbsp;&nbsp;Tugas&nbsp;&nbsp;&nbsp;&nbsp;</span>
     </a>

     <br>
     <br>

     <div class="wrapper wrapper--w960 ml-0">
          <div class="card card-4">
               <div class="card-body">
                    <label class="label">Pilih Tugas</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                         <select name="subject">
                              <option disabled="disabled" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tugas Ke- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                              <option>Tugas 1</option>
                              <option>Tugas 2</option>
                              <option>Tugas 3</option>
                              <option>Tugas 4</option>
                              <option>Tugas 5</option>
                              <option>Tugas 6</option>
                              <option>Tugas 7</option>
                              <option>Tugas 8</option>
                              <option>Tugas 9</option>
                              <option>Tugas 10</option>
                         </select>
                         <a href="#" class="btn btn-primary btn-icon-split">
                              <span class="text">&nbsp;&nbsp;&nbsp;Pilih&nbsp;&nbsp;&nbsp;</span>
                         </a>
                         <div class="select-dropdown"></div>
                    </div>
                    <br>
                    <br>
                    <a href="#" class="btn btn-primary btn-icon-split">
                         <span class="text">&nbsp;&nbsp;&nbsp;Unggah File Tugas&nbsp;&nbsp;&nbsp;</span>
                    </a>
               </div>
          </div>
     </div>

     </div>
     <!-- /.container-fluid -->

@endsection