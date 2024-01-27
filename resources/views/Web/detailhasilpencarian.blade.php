@extends('Layouts.master')

@section('content')

<div class="container-fluid header bg-white p-0">
  <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
    <div class="col-md-12 p-5 mt-lg-5 md-lg-5">
      <div class="container" style="margin-top: 100px">
        <div class="row g-0 gx-5 align-items-end">
          <div class="col-lg-6">
            <div
              class="text-start mx-auto mb-5 wow slideInLeft"
              data-wow-delay="0.1s"
            >
            <h1 >Informasi Pendaftaran {{$data -> nama}}</h1>
            <p>Berikut adalah informasi pendaftaran :</p>

            <h5 class="mt-lg-5">Syarat Pembuatan {{$data -> nama}}</h5>
            <ol>
              @foreach ($syarat as $w )
                <li>{{$w->syarat}}</li>
              @endforeach
            </ol>

            <h5 class="mt-lg-5">Dokumen yang di butuhkan  </h5>
            <ol>
              @foreach ($dokumen as $w )
                <li>{{$w->dokumen}}</li>
              @endforeach
            </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection