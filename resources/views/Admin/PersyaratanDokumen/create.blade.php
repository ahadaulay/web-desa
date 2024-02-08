@extends('Layouts.admin')

@section('content')

<h1>Tambah Persyaratan Dokumen</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Dokumen</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="/admin/persyaratan_dokumen/store" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                    @csrf
                <div class="form-body">
                    <div class="row">

                    <div class="col-md-4">
                        <label>singkatan</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="text" id="first-name" class="form-control" name="singkatan" placeholder="Masukkan singkatan ">
                    </div>

                    <div class="col-md-4">
                        <label>nama</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="text" id="first-name" class="form-control" name="nama" placeholder="Masukkan nama">
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
