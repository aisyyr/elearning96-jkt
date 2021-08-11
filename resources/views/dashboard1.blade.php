@extends('masterdashboard')
@section('content')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
    
    @if(auth()->user()->roles == 'admin')
    <div class="wrapper wrapper--w960 ml-1">
        <div class="card card-4">
            <div class="card-body">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-700">Selamat Datang, {{ Auth::user()->name }} !</h1> <br><br>
            <h2 class="h4 mb-4 text-gray-700">Wewenang Admin : </h2>
            <h2 class="h4 mb-4 text-gray-700">1. Upload File Informasi Resmi Sekolah (Pada Halaman Homesite) <br> 
                2. Membuat Kode Registrasi Pengguna (Guru & Siswa) <br> 
                3. Mengubah atau Menambahkan Pelajaran</h2>
            </div>
        </div>
    </div>
    @endif


    @if(auth()->user()->roles == 'guru')
    <div class="wrapper wrapper--w1000 ml-1">
        <div class="card card-4">
            <div class="card-body">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-700">Selamat Datang, {{ Auth::user()->name }}</h1>
            <h2 class="h4 mb-4 text-gray-700">Selamat Mengajar dan Tetap Semangat!</h2>
            <br>
            <hr>
            <br>
            <h4 class="h4 mb-4 text-gray-700">Data Diri Pengajar / Guru</h4>

            <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nama Pengajar/Guru</th>
                <th>NIP Guru</th>
                <th>Hak Akses</th>
                <th width="180px">Pelajaran yang diajar 1 *</th>
                <th width="180px">Pelajaran yang diajar 2</th>
                <th width="180px">Pelajaran yang diajar 3</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ Auth::user()->name }}</td>
                <td>{{ Auth::user()-> penggunaid }}}</td>
                <td>{{ Auth::user()->roles }}</td>

                <?php
                if(!empty(Auth::user()->matapelajaran)) {
                    ?><td>{{ Auth::user()->matapelajaran }}</td>
                <?php ; } else {
                    ?><td><b>Pilih Mata Pelajaran pada bagian Pengaturan<b></td>
                <?php ; } ?>

                <?php
                if(!empty(Auth::user()->matapelajaran2)) {
                    ?><td>{{ Auth::user()->matapelajaran2 }}</td>
                <?php ; } else {
                    ?><td><b>Pilih Mata Pelajaran pada bagian Pengaturan<b></td>
                <?php ; } ?>
                
                <?php
                if(!empty(Auth::user()->matapelajaran3)) {
                    ?><td>{{ Auth::user()->matapelajaran3 }}</td>
                <?php ; } else {
                    ?><td><b>Pilih Mata Pelajaran pada bagian Pengaturan<b></td>
                <?php ; } ?>
            </tr>
            </tbody>
            </table>

            <br>
            </div>
        </div>
    </div>
    @endif


    @if(auth()->user()->roles == 'siswa')
    <div class="wrapper wrapper--w960 ml-1">
        <div class="card card-4">
            <div class="card-body">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-700">Selamat Datang, Siswa SMP Negeri 96 Jakarta</h1>
            <h2 class="h4 mb-4 text-gray-700">Selamat Belajar dan Tetap Semangat, {{ Auth::user()->name }} !</h2>
            <br>
            <hr>
            <br>
            <h4 class="h4 mb-4 text-gray-700">Data Diri Siswa</h4>

            <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>NISN Siswa</th>
                <th>Hak Akses</th>
                <th>Kelas</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ Auth::user()->name }}</td>
                <td>{{ Auth::user()-> penggunaid }}}</td>
                <td>{{ Auth::user()->roles }}</td>
                <?php
                if(!empty(Auth::user()->kelass)) {
                    ?><td>{{ Auth::user()->kelass }}</td>
                <?php ; } else {
                    ?><td><b>Pilih Kelas pada bagian Pengaturan<b></td>
                <?php ; } ?>
            </tr>
            </tbody>
            </table>

            </div>
        </div>
    </div>
    @endif
@endsection