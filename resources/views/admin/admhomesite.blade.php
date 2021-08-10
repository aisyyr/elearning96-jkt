<head>
     <title>Homesite</title>
</head>

@extends('masterdashboard')

@section('content')

          <!-- Begin Page Content -->
          <div class="container-fluid">

               <!-- Page Heading -->
               <h1 class="h3 mb-4 text-gray-700">Homesite</h1>

               <a type="file" href="/homesite-upload" class="btn btn-primary btn-icon-split btn-sm mb-4">
                    <span class="text">&nbsp;&nbsp;&nbsp;(+) Unggah File Informasi&nbsp;&nbsp;&nbsp;</span>
               </a>
               
               @if(session('success'))
                    <div class="alert alert-success">
                    {{ session('success') }}
                    </div>
               @endif

               <div class="mt-1 card-deck">

               @foreach($file_informasi as $key => $file_informasi)
               <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem;">
                         <img src="{{asset('admin/img/book.png')}}" class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">{{ $file_informasi->file_info }}</h5>
                              <p class="card-text">{{ $file_informasi->keterangan }}</p>
                              <img src="{{asset($file_informasi->file_doc)}}" alt="" srcset="">
                              <br>
                              <p class="card-text">{{ $file_informasi->tanggal_unggah }}</p>
                              <div style="display: flex;">
                              <a href="/homesite-admin/{{$file_informasi->id}}/edit" class="btn btn-primary">Ubah</a>&nbsp;
                              <form action="/homesite-admin/{{$file_informasi->id}}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <input type="submit" value="Hapus" class="btn btn-danger">
                              </form>
                              </div>
                         </div>
                    </div>
               </div>
               @endforeach

               </div>
          </div>
          <!-- /.container-fluid -->

@endsection