@extends('layout.admin')
@section('title', 'Data Karyawan')
@section('content')
    <h1 class="text-center">
        DATA KARYAWAN
    </h1>
    <div class="col-12 col-md-12 my-3 text-center">
        {!! $qrCode !!}
    </div>
    <div class="col-12 col-md-12 text-center">
        <h2>
            {{ $data->nama }}
        </h2>
        <h3>
            {{ $data->jabatan }}
        </h3>
    </div>
@endsection