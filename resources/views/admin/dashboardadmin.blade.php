@extends('admin.masteradmin')

@section('content')

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-700">Selamat Datang, {{ Auth::user()->name }} !</h1> <br><br>
                    <h2 class="h4 mb-4 text-gray-700">Wewenang Admin : </h2>
                    <h2 class="h4 mb-4 text-gray-700">1. Upload File Informasi Resmi Sekolah (Pada Halaman Homesite) <br> 
                        2. Mengubah Hak Akses Pengguna (Guru & Siswa) <br> 
                        3. Membuat Kode Registrasi Pengguna (Guru & Siswa) <br> 
                        4. Mengubah atau Menambahkan Pelajaran</h2>


@endsection