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
              <h1 class="mb-3">WISATA</h1>
              <p>
                Destinasi Wisata di desa DELISAOS
              </p>
            </div>
          </div>
        </div>
        <div class="tab-content">
          <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
              {{-- card start --}}
              @foreach ($wisata as $w)
              <div
                class="col-lg-4 col-md-6 wow fadeInUp"
                data-wow-delay="0.1s"
              >
                <div class="property-item rounded overflow-hidden">
                  <div class="position-relative overflow-hidden">
                    <a href="/wisata-detail/{{$w->slug}}/{{$w->id}}"
                      ><img style="object-fit: cover;"  width="400px" height="200px" src="{{$w->gambar}}" alt=""
                    /></a>
                  </div>
                  <div class="p-4 pb-0">
                    <a class="d-block h5 mb-2" href="/wisata-detail/{{$w->slug}}/{{$w->id}}"
                      >{{$w->nama_tempat}}</a
                    >
                    <p>
                      <i class="text-primary me-2"></i
                      >{{ \Carbon\Carbon::parse($w->tanggal)->isoFormat('DD MMMM YYYY', 'Do MMMM YYYY') }}  
                    </p>
                  </div>
                </div>
              </div>
              @endforeach
              {{-- card end --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection