@extends('Layouts.master')

@section('content')
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-12 p-5 mt-lg-5">
                <h3 class="mt-lg-5">WISATA</h3>
                <h1 style="text-transform: uppercase;">Danau Lut tawar yang gak asin</h1>
                <p>17 Januri 2022</p>

                        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
              <div
                class="owl-carousel testimonial-carousel wow fadeInUp"
                data-wow-delay="0.1s"
              >
              {{-- card start --}}
                <div class="testimonial-item bg-light rounded p-3">
                    <img style="object-fit: cover;" width="600px" height="300px" src="{{asset('lepten')}}/img/berita1.jpg" alt=""/>
                </div>
                {{-- card end --}}
              </div>
            </div>
        </div>
          <!-- Testimonial End -->
                <div class="container col-md-12">
                    <div class="mt-lg-5 text-box" style="word-wrap: break-word; max-width: 700px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat hic aliquid totam nisi in
                        architecto ullam quas vero ea iusto nostrum earum, consectetur enim iure natus facilis et.
                        Voluptas, ratione.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat hic aliquid totam nisi in
                        architecto ullam quas vero ea iusto nostrum earum, consectetur enim iure natus facilis et.
                        Voluptas, ratione.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat hic aliquid totam nisi in
                        architecto ullam quas vero ea iusto nostrum earum, consectetur enim iure natus facilis et.
                        Voluptas, ratione.
                        v
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat hic aliquid totam nisi in
                        architecto ullam quas vero ea iusto nostrum earum, consectetur enim iure natus facilis et.
                        Voluptas, ratione.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat hic aliquid totam nisi in
                        architecto ullam quas vero ea iusto nostrum earum, consectetur enim iure natus facilis et.
                        Voluptas, ratione.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
