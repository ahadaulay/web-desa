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
              <h1 class="mb-3">Berita</h1>
              <p>
                Berita seputar Desa dan kegiatan di desa DELISAOS
              </p>
            </div>
          </div>
        </div>
        <div class="tab-content">
          <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
              {{-- card start --}}
              @foreach ($berita as $w)
              <div
                class="col-lg-4 col-md-6 wow fadeInUp"
                data-wow-delay="0.1s"
              >
                <div class="property-item rounded overflow-hidden">
                  <div class="position-relative overflow-hidden">
                    <a href="/beritas/{{$w->slug}}"
                      ><img style="object-fit: cover;"  width="400px" height="200px" src="{{$w->gambar}}" alt=""
                    /></a>
                    <div
                      class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                    >
                    {{$w->kategori}}
                    </div>
                  </div>
                  <div class="p-4 pb-0">
                    <a class="d-block h5 mb-2" href="/beritas/{{$w->slug}}"
                      >{{$w->judul}}</a
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