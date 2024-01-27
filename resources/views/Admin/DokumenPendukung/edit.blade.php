@extends('Layouts.admin')

@section('content')

<h1>Edit Dokumen Pendukung</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">DOKUMEN</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/admin/dokumen_pendukung/{{$data->id}}" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="row">

                                    <div class="col-md-4">
                                        <label for="nama">persyaratan dokumen id</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required readonly value="{{$data->persyaratan_dokumen_id}}" type="text" id="nama" class="form-control" name="persyaratan_dokumen_id" placeholder="Masukkan persyaratan_dokumen_id">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="nama">dokumen</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required value="{{$data->dokumen}}" type="text" id="nama" class="form-control" name="dokumen" placeholder="Masukkan dokumen">
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
