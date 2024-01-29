@extends('Layouts.master')

@section('content')
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-12 p-5 mt-lg-5">
                <h3 class="mt-lg-5">BERITA</h3>
                <p class="mt-lg-5">{{$berita->kategori}}</p>
                <h1 style="text-transform: uppercase;">{{$berita->judul}}</h1>
                <p>{{ \Carbon\Carbon::parse($berita->tanggal)->isoFormat('DD MMMM YYYY', 'Do MMMM YYYY') }}</p>
                <img style="object-fit: cover;" width="600px" height="300px" src="{{$berita->gambar}}" alt=""/>

                <div class="container col-md-12">
                    <div class="mt-lg-5 text-box" style="word-wrap: break-word; max-width: 700px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat hic aliquid totam nisi in
                        architecto ullam quas vero ea iusto nostrum earum, consectetur enim iure natus facilis et.
                        Voluptas, ratione.{{$berita->isi}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
