@extends('Layouts.admin')

@section('content')
@if (session("success_delete"))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
        <use xlink:href="#exclamation-triangle-fill" />
    </svg>
    <div>
        Berhasil Menghapus
    </div>
</div>
@endif

@if (session("success_edit"))
<div class="alert alert-warning d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
        <use xlink:href="#exclamation-triangle-fill" />
    </svg>
    <div>
        Berhasil Mengubah
    </div>
</div>
@endif

@if (session("success_create"))
<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
        <use xlink:href="#check-circle-fill" />
    </svg>
    <div>
        Berasil menambah
    </div>
</div>
@endif

<h1>Detail Syarat {{$data->nama}} </h1>

<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h4 class="card-title text-white ">PERSYARATAN</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <a href="/admin/detail_syarat/create/{{$data->id}}">
              <button type="button" class="btn btn-primary m-3 ml-3" >Tambah Persyaratan</button>
            </a>  
          </div>
          <!-- table hover -->
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Syarat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp

                @foreach($persyaratan as $w)
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$w->syarat}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/admin/detail_syarat/{{$w->id}}/edit">
                          <button type="button" class="btn btn-warning m-3" >EDIT</button>
                        </a>

                        <form action="/admin/detail_syarat/{{$w->id}}/destroy/{{$data->id}}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="sumbit"  value="Delete" class="btn btn-danger m-3">HAPUS</button>
                        </form>
                      </div>
                  </td>
                </tr>
                @php
                $no++;
                @endphp
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hoverable rows end -->
@endsection

