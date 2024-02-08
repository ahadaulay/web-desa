@extends('Layouts.master')

@section('content')


<div class="container-fluid header bg-white p-0">
  <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
    <div class="col-md-12 p-5 mt-lg-5 md-lg-5"> 
      <div class="container" >
          <div class="pt-lg-4" >
          <h1 class="mt-lg-5">VISI & MISI DESA DELISAOS</h1>
          <div class="row">
            <img class="col-md-3" width="250px" height="250px" src="{{asset('sneat')}}/assets/img/favicon/tujuan.png" alt="">
            
            <div class="container col-md-9">
              <h3 class="mt-lg-5 col-md-12">VISI</h3>
              <p class="col-md-6" style="text-align: justify">Menjadi desa yang berkembang secara berkelanjutan, menjunjung tinggi harmoni antara manusia dan alam, serta menjadi destinasi wisata yang memukau.</p>
            </div>
          </div>

          <h3 class="mt-lg-5">MISI</h3>
          <ol>
            <li>Meningkatkan akses pendidikan untuk semua lapisan masyarakat.</li>
            <li>Mendorong pembentukan dan perkembangan usaha kecil dan menengah (UKM) di desa.
            </li>
            <li>Melakukan program penyuluhan kesehatan untuk meningkatkan kesadaran masyarakat tentang praktik kesehatan yang baik.
            </li>
          </ol>
          
        </div>
      </div>
      </div>
    </div>

    


@endsection