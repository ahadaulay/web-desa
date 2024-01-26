@extends('Layouts.admin')

@section('content')

<h1>Edit Pejabat</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">PEJABAT</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/pejabat/{{$data->id}}" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="nama">Nama</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required value="{{ $data->nama }}" type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan nama">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="deskripsi">jabatan</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required value="{{ $data->jabatan }}" type="text"  class="form-control" name="jabatan" placeholder="Masukkan jabatan">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="foto">Foto</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input  type="file" id="foto" class="form-control" name="foto" placeholder="Masukkan foto">
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
