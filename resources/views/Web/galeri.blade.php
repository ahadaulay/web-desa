@extends('Layouts.master')

@section('content')
<div class="container-xxl bg-white p-0">
    <!-- Property List Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-0 gx-5 align-items-end">
          <div class="col-lg-6">
            <div
              class="text-start mx-auto mb-5 wow slideInLeft"
              data-wow-delay="0.1s"
            >
              <h1 class="mb-3">GALERI</h1>
              <p>
                Galeri seputar LEPTEN dan kegiatan akademisi dan pelatihan
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
                    <a href="/beranda"
                      ><img class="img-fluid" src="{{asset('lepten')}}/img/berita1.jpg" alt=""
                    /></a>
                  </div>
                  </div>
                  
                  <div class="p-4 pb-0">
                    <p>
                      <i class="text-primary me-2"></i
                      >12 November 2023
                    </p>
                    <a class="d-block h5 mb-2"
                      >Pengabdian Dosen Prodi sistem Informasi Universitas Malikussaleh</a
                    >
                  </div>
                </div>
                
              </div>
              {{-- card end --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Property List End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>
  </div>
@endsection