@extends('Layouts.admin')

@section('content')

<h1>Tambah Gambar Wisata</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">GAMBAR</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="/admin/gambar_wisata/store/{{$data->id}}" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                    @csrf
                <div class="form-body">
                    <div class="row">

                    <div class="col-md-4">
                        <label>tempat wisata id</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input readonly required value="{{$data->id}}" type="text" id="first-name" class="form-control" name="tempat_wisata_id">
                    </div>

                    <div class="col-md-4">
                        <label>gambar</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="file" id="first-name" class="form-control" name="gambar" placeholder="Masukkan gambar">
                    </div>

                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" value="save" name="sumbit" class="btn btn-primary mr-1 mb-1 mt-3">Submit</button>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>

@endsection
