@extends('Layouts.master')

@section('content')
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-12 p-5 mt-lg-5">
                <h3 class="mt-lg-5">BERITA</h3>
                <p class="mt-lg-3">{{$berita->kategori}}</p>
                <h1 class="mt-lg-2" style="text-transform: uppercase;">{{$berita->judul}}</h1>
                <p>{{ \Carbon\Carbon::parse($berita->tanggal)->isoFormat('DD MMMM YYYY', 'Do MMMM YYYY') }}</p>
                <img class="img-fluid mb-4" src="{{$berita->gambar}}" alt=""/>

                <div class="container col-md-10 mx-auto">
                    <div class="mt-lg-5 text-box" style="word-wrap: break-word;">
                        <p class="text-dark">{!! nl2br(e($berita->isi)) !!}</p>
                    </div>
                </div>                
            </div>
        </div>
    </div>
@endsection
