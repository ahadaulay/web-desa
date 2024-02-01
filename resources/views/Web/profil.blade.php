@extends('Layouts.master')

@section('content')


<div class="container-fluid header bg-white p-0">
  <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
    <div class="col-md-12 p-5 mt-lg-5 md-lg-5"> 
      <div class="container" >
          <div class="pt-lg-4" >
          <h1 class="mt-lg-5 col-6">PROFIL DESA DELISAOS</h1>
          <div class="row">
          <img class="col-6 mt-lg-5" style="object-fit: cover;" width="600px" height="300px" src="{{asset('sneat')}}/assets/img/favicon/fotodesa.jpeg" alt="">
          <p class="col-6 mt-lg-5" style="text-align: justify">Desa Delisaos, sebuah destinasi pesona tersembunyi di pedalaman, memukau setiap pengunjung dengan keindahan alamnya yang menakjubkan. Dikelilingi oleh hutan lebat dan sungai yang membelah, desa ini menawarkan pengalaman ekowisata yang unik, mengajak wisatawan untuk merasakan keindahan alam dan keanekaragaman hayati yang masih terjaga. Desa ini tidak hanya menonjolkan panorama alamnya, tetapi juga memegang teguh nilai-nilai keberlanjutan dengan melibatkan masyarakatnya dalam upaya pelestarian lingkungan dan pemberdayaan ekonomi lokal.

            Desa Delisaos tidak hanya mempesona dari segi alam, tetapi juga dari sisi kehidupan masyarakatnya yang ramah dan berbudaya. Dengan tradisi lokal yang kental, pengunjung dapat merasakan keramahan penduduk dan terlibat dalam kegiatan kultural yang otentik. Desa ini berhasil menciptakan keseimbangan yang harmonis antara pengembangan ekonomi, pelestarian alam, dan kearifan lokal, menjadikannya destinasi yang menginspirasi bagi mereka yang mencari pengalaman wisata yang mendalam dan bermakna.
          </p>
        </div>
        </div>

        <div class="container text-center">
  <h1 class="mt-lg-5">Program Unggulan</h1>
  <div class="row mt-lg-5">
    <div class="col-md-4">
      <img class="img-fluid" src="{{asset('sneat')}}/assets/img/favicon/pendidikan.png" alt="" width="250" height="250">
      <h3>Pendidikan</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
    </div>

    <div class="col-md-4">
      <img class="img-fluid" src="{{asset('sneat')}}/assets/img/favicon/wisata.png" alt="" width="250" height="250">
      <h3>Wisata</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
    </div>

    <div class="col-md-4">
      <img class="img-fluid" src="{{asset('sneat')}}/assets/img/favicon/pertanian.png" alt="" width="250" height="250">
      <h3>Pertanian</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
    </div>
  </div>
</div>


        <div class="container-fluid contact py-5">
          <div class="container py-5 text-center">
            <h1>LOKASI DESA</h1>
              <div class="p-5 bg-light rounded">
                  <div class="row g-4">
                      <div class="col-lg-12">
                          <div class="h-100 rounded">
                              <iframe class="rounded w-100" 
                              style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d508923.96079779783!2d96.66271997636747!3d4.77539975744361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30388c1d8bd63877%3A0xc7c01de53e9c64b6!2sBener%20Meriah%20Regency%2C%20Aceh!5e0!3m2!1sen!2sid!4v1706631799711!5m2!1sen!2sid" 
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