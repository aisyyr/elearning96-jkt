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
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-700">Selamat Datang, {{ Auth::user()->name }} !</h1> <br><br>
                    <h2 class="h4 mb-4 text-gray-700">Wewenang Admin : </h2>
                    <h2 class="h4 mb-4 text-gray-700">1. Upload File Informasi Resmi Sekolah (Pada Halaman Homesite) <br> 
                        2. Mengubah Hak Akses Pengguna (Guru & Siswa) <br> 
                        3. Membuat Kode Registrasi Pengguna (Guru & Siswa) <br> 
                        4. Mengubah atau Menambahkan Pelajaran</h2>
                    
                @endif


                @if(auth()->user()->roles == 'Guru')
                <div class="container-fluid">
                    <!-- Page Heading -->
                    
                    <h1 class="h3 mb-4 text-gray-700">Selamat Datang,</h1>
                    <h2 class="h4 mb-4 text-gray-700">Selamat Mengajar dan Tetap Semangat!</h2>
                    <br>
                    <hr>
                    <br>
                    <h4 class="h4 mb-4 text-gray-700">Data Diri Pengajar / Guru</h4>
                    <h4 class="h4 mb-4 text-gray-700">Nama : {{ Auth::user()->name }}</h4>
                    <br>
                </div>
                
                @endif


                @if(auth()->user()->roles == 'Siswa')
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-700">Selamat Datang, Siswa SMP Negeri 96 Jakarta</h1>
                    <h2 class="h4 mb-4 text-gray-700">Selamat Belajar dan Tetap Semangat !</h2>
                    <br>
                    <hr>
                    <br>
                    <h4 class="h4 mb-4 text-gray-700">Data Diri Siswa</h4>
                    <h4 class="h4 mb-4 text-gray-700">Nama : {{ Auth::user()->name }}</h4>
                </div>
                @endif


@endsection