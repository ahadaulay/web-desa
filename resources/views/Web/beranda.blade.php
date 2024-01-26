@extends('Layouts.master')

@section('content')
<div class="container-xxl bg-white p-0">

 
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
      <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
          <h1 class="display-5 animated fadeIn mb-4">
            Selamat Datang di 
            <span class="text-primary">Desa Delisaos </span> 
          </h1>
          <p class="animated fadeIn mb-4 pb-2">
            Delisaos adalah sebuah desa pada kecamatan Muara Dua, Lhokseumawe, NAD. Telah mengimplementasikan desa digital sebagai proses pemerataan digital indonesia
          </p>
          <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn"
            >Selengkapnya</a
          >
        </div>
        <div class="col-md-6 animated fadeIn">
          <div class="owl-carousel header-carousel">
            @foreach ($beranda as $w)
            <div class="owl-carousel-item">
                <img src="{{$w->gambar}}" alt="{{$w->nama}}" style="object-fit: cover;" height="700px" width="300px">
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
          <div class="container">
            <div
              class="text-center mx-auto mb-5 wow fadeInUp"
              data-wow-delay="0.1s"
              style="max-width: 600px"
            >
              <h1 class="mb-3">Pengumuman</h1>
              <p>
                Pusat informasi pemberitahuan dari Desa
              </p>
            </div>
            <div
              class="owl-carousel testimonial-carousel wow fadeInUp"
              data-wow-delay="0.1s"
            >
            {{-- card start --}}
            @foreach ($pengumuman as $w)
              <div class="testimonial-item bg-light rounded p-3">
                <div class="bg-white border rounded p-4">
                  <p>
                    {{$w->isi}}
                  </p>
                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h6 class="fw-bold mb-1">{{$w->pejabat}}</h6>
                      <small>{{ \Carbon\Carbon::parse($w->tanggal)->isoFormat('DD MMMM YYYY', 'Do MMMM YYYY') }}
                      </small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              {{-- card end --}}
            </div>
          </div>
        </div>
        <!-- Testimonial End -->

    <!-- Category Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h1 class="mb-3">Layanan</h1>
          <p>
            Kentor Desa Delisaos memberikan beberapa layanan yang dapat dilakukan
          </p>
        </div>
        <div class="row g-4">
          @foreach ($layanan as $w)
          {{-- card start --}}
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                <div class="rounded p-4" >
                    <div class="icon mb-3">
                        <img class="img-fluid" src="{{$w->gambar}}" style="object-fit: cover;" alt="Icon" width="100px" height="100px" />
                    </div>
                    <h6>{{$w->nama}}</h6>
                    <span>{{$w->deskripsi}}</span>
                </div>
            </a>
        </div>
        
          {{-- card end --}}
          @endforeach

        </div>
      </div>
    </div>
    <!-- Category End -->

    <!-- Property List Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-0 gx-5 align-items-end">
          <div class="col-lg-6">
            <div
              class="text-start mx-auto mb-5 wow slideInLeft"
              data-wow-delay="0.1s"
            >
              <h1 class="mb-3">Berita</h1>
              <p>
                Berita seputar LEPTEN dan kegiatan akademisi dan pelatihan
              </p>
            </div>
          </div>
        </div>
        <div class="tab-content">
          <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
              {{-- card start --}}
              <div
                class="col-lg-4 col-md-6 wow fadeInUp"
                data-wow-delay="0.1s"
              >
                <div class="property-item rounded overflow-hidden">
                  <div class="position-relative overflow-hidden">
                    <a href=""
                      ><img class="img-fluid" style="object-fit: cover;" src="{{asset('lepten')}}/img/berita1.jpg" alt=""
                    /></a>
                    <div
                      class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                    >
                      Pengabdian
                    </div>
                  </div>
                  <div class="p-4 pb-0">
                    <a class="d-block h5 mb-2" href=""
                      >Pengabdian Dosen Prodi sistem Informasi Universitas Malikussaleh</a
                    >
                    <p>
                      <i class="text-primary me-2"></i
                      >12 November 2023
                    </p>
                  </div>
                </div>
                
              </div>
              {{-- card end --}}

              
              <div
                class="col-12 text-center wow fadeInUp"
                data-wow-delay="0.1s"
              >
                <a class="btn btn-primary py-3 px-5" href="/berita"
                  >Berita Lainnya</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Property List End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h1 class="mb-3">Pejabat Desa</h1>
          <p>
            Siap melayani dengan sepenuh hati
          </p>
        </div>
        
        <div class="row g-4">
          {{-- card start --}}
          @foreach ($pejabat as $w)
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item rounded overflow-hidden">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{$w->gambar}}" alt="" style="object-fit: cover; width: 100%; height: 300px;">
                      <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                          <a class="btn btn-square mx-1" href=""><img width="30px" height="30px" src="{{asset('lepten')}}/img/logos.png" alt=""></a>
                      </div>
                  </div>
                  <div class="text-center p-4 mt-3">
                      <h5 class="fw-bold mb-0">{{$w->nama}}</h5>
                      <small>{{$w->jabatan}}</small>
                  </div>
              </div>
          </div>
          @endforeach
          
          {{-- card end --}}
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>
  </div>
@endsection