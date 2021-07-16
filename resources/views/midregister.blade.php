@extends('RegMaster')

@section('content')

<div class="page-wrapper bg-darkblue p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">

                <div class="card-body">
                <h3 class="title" align="center">Registrasi Akun {{ Auth::user()->roles }}</h3>

                

                </div>
            </div>
        </div>
</div>

@endsection