@extends('Layouts.master')

@section('content')


    <div style="height: 1300px" class="container-fluid header bg-white p-0">
      <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-12 p-5 mt-lg-5 md-lg-5">
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
            <div class="container col-3">
              <img width="250px" height="250px" src="{{asset('sneat')}}/assets/img/favicon/pendidikan.png" alt="">
              <h3>Pendidikan</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto tempora commodi ipsum minus deserunt alias pariatur neque ad quisquam nesciunt. Aliquid, unde ab nam qui animi ea ipsa et eaque.</p>
            </div>

            <div class="container col-3">
              <img width="250px" height="250px" src="{{asset('sneat')}}/assets/img/favicon/wisata.png" alt="">
              <h3>Wisata</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto tempora commodi ipsum minus deserunt alias pariatur neque ad quisquam nesciunt. Aliquid, unde ab nam qui animi ea ipsa et eaque.</p>
            </div>

            <div class="container col-3">
              <img width="250px" height="250px" src="{{asset('sneat')}}/assets/img/favicon/pertanian.png" alt="">
              <h3>Pertanian</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto tempora commodi ipsum minus deserunt alias pariatur neque ad quisquam nesciunt. Aliquid, unde ab nam qui animi ea ipsa et eaque.</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    


@endsection