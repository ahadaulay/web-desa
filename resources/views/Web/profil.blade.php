@extends('Layouts.master')

@section('content')


    <div style="height: 1700px" class="container-fluid header bg-white p-0">
      <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-12 p-5 mt-lg-5 md-lg-5">
          <div class="pt-lg-4" >
          <h1 class="mt-lg-5 col-6">PROFIL DESA DELISAOS</h1>
          <div class="row">
          <img class="col-6 mt-lg-5" style="object-fit: cover;" width="600px" height="300px" src="{{asset('sneat')}}/assets/img/favicon/fotodesa.jpeg" alt="">
          <p class="col-6 mt-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum et rem voluptate quod ex dignissimos nostrum dicta tempora facere dolorum eos nam, accusantium vero recusandae aspernatur dolorem delectus maxime?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, nam iusto? Ea corrupti in quo id voluptas optio dolores architecto assumenda, sunt enim, distinctio laborum alias unde porro debitis perspiciatis!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum corrupti sapiente optio odio nemo culpa praesentium, aperiam asperiores iste placeat iusto sunt animi veniam esse aspernatur tempora! Modi, ab enim?
          
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