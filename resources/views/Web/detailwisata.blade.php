@extends('Layouts.master')

@section('content')
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-12 p-5 mt-lg-5">
                <h3 class="mt-lg-5">WISATA</h3>
                <h1 style="text-transform: uppercase;">{{$wisata->nama_tempat}}</h1>
                <p>{{ \Carbon\Carbon::parse($wisata->tanggal)->isoFormat('DD MMMM YYYY', 'Do MMMM YYYY') }}</p>

                        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
              <div
                class="owl-carousel testimonial-carousel wow fadeInUp"
                data-wow-delay="0.1s"
              >
              {{-- card start --}}
                <div class="testimonial-item bg-light rounded p-3">
                    <img style="object-fit: cover;" width="600px" height="300px" src="{{$wisata->gambar}}" alt=""/>
                </div>
                {{-- card end --}}

                @foreach ($gambar as $w)
                {{-- card start --}}
                    <div class="testimonial-item bg-light rounded p-3">
                        <img style="object-fit: cover;" width="600px" height="300px" src="{{$w->gambar}}" alt=""/>
                    </div>
                {{-- card end --}}
                @endforeach
              </div>
            </div>
        </div>
          <!-- Testimonial End -->
                <div class="container col-md-12">
                    <div class="mt-lg-5 text-box" style="word-wrap: break-word; max-width: 700px;">
                        {{$wisata->deskripsi}}
                    </div>
                </div>

        <div class="container-fluid contact py-5">
            <div class="container py-5 text-center">
              <h1>LOKASI WISATA</h1>
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="h-100 rounded">
                                <iframe class="rounded w-100" 
                                style="height: 400px;" src="{{$wisata->lokasi}}" 
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
@endsection
