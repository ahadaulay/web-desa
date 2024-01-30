@extends('Layouts.admin')
@section('content')


<h1 class="mb-3">HII SELAMAT DATANG :)</h1>
<div class="row">
    <div class="col-3 mb-4">
        <div class="card text-white bg-primary mt-3">
            <div class="card-body">
                <h5 class="card-title text-white"> HERO</h5>
                <p class="card-text">{{$beranda}}</p>
            </div>
        </div>
    </div>

    <div class="col-3 mb-4">
        <div class="card text-white bg-success mt-3">
            <div class="card-body">
                <h5 class="card-title text-white">BERITA</h5>
                <p class="card-text">{{$berita}}</p>
            </div>
        </div>
    </div>

    <div class="col-3 mb-4">
        <div class="card text-white bg-warning mt-3">
            <div class="card-body">
                <h5 class="card-title text-white">LAYANAN</h5>
                <p class="card-text">{{$layanan}}</p>
            </div>
        </div>
    </div>

    <div class="col-3 mb-4">
        <div class="card text-white bg-danger mt-3">
            <div class="card-body">
                <h5 class="card-title text-white">PEJABAT</h5>
                <p class="card-text">{{$pejabat}}</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3 mb-4">
        <div class="card text-white bg-primary mt-3">
            <div class="card-body">
                <h5 class="card-title text-white"> PENDUDUK</h5>
                <p class="card-text">{{$penduduk}}</p>
            </div>
        </div>
    </div>

    <div class="col-3 mb-4">
        <div class="card text-white bg-success mt-3">
            <div class="card-body">
                <h5 class="card-title text-white">PENGUMUMAN</h5>
                <p class="card-text">{{$pengumuman}}</p>
            </div>
        </div>
    </div>

    <div class="col-3 mb-4">
        <div class="card text-white bg-warning mt-3">
            <div class="card-body">
                <h5 class="card-title text-white">WISATA</h5>
                <p class="card-text">{{$wisata}}</p>
            </div>
        </div>
    </div>

    <div class="col-3 mb-4">
        <div class="card text-white bg-danger mt-3">
            <div class="card-body">
                <h5 class="card-title text-white">DOKUMEN</h5>
                <p class="card-text">100</p>
            </div>
        </div>
    </div>
</div>
@endsection