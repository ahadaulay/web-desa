@extends('Layouts.admin')

@section('content')

<h1>Edit Pengumuman</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">PENGUMUMAN</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/pengumuman/{{$data->id}}" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="nama">isi</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required value="{{$data->isi}}" type="text" id="nama" class="form-control" name="isi" placeholder="Masukkan isi">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="deskripsi">Pejabat</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required value="{{$data->pejabat}}" type="text"  class="form-control" name="pejabat" placeholder="Masukkan pejabat">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="foto">Tanggal</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input  type="date" value="{{$data->tanggal}}" id="foto" class="form-control" name="tanggal" placeholder="Masukkan tanggal">
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" value="save" name="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
