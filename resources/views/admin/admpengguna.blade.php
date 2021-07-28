@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Pengaturan Akun Guru</h1>

          <a href="/pengguna-guru" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;Guru&nbsp;</span>
          </a>
          <a href="/pengguna-siswa" class="btn btn-primary btn-icon-split">
               <span class="text">&nbsp;Siswa&nbsp;</span>
          </a>

          <br><br>

          @if(session('success'))
               <div class="alert alert-success">
               {{ session('success') }}
               </div>
          @endif

          <br>

          <table class="table table-bordered">
          <thead>
          <tr>
               <th>NIP Guru</th>
               <th>Nama Guru</th>
               <th>Hak Akses</th>
               <th style="width: 40px">Pengaturan</th>
          </tr>
          </thead>
          <tbody>
          @foreach($users as $key => $user)
               <tr>
                    <td>{{ $user->nip_guru }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->roles }} </td>
                    <td style="display:flex;">
                         <form action="/pengguna-guru/{{$user->name}}" method="post">
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