@extends('Layouts.admin')

@section('content')

<h1>Tambah Wisata</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">WISATA</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="/admin/wisata/store" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                    @csrf
                <div class="form-body">
                    <div class="row">

                    <div class="col-md-4">
                        <label>nama tempat</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="text" id="first-name" class="form-control" name="nama_tempat" placeholder="Masukkan nama tempat">
                    </div>

                    <div class="col-md-4">
                        <label>tanggal</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="date" id="first-name" class="form-control" name="tanggal" placeholder="Masukkan tanggal">
                    </div>

                    <div class="col-md-4">
                        <label>lokasi</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="text" id="first-name" class="form-control" name="lokasi" placeholder="Masukkan lokasi">
                    </div>

                    <div class="col-md-4">
                        <label>deskripsi</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <textarea cols="30" rows="10" required type="textarea " id="first-name" class="form-control" name="deskripsi" placeholder="Masukkan deskripsi"></textarea>
                    </div>  
                    

                    <div class="col-md-4">
                        <label>foto</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="file" id="first-name" class="form-control" name="foto" placeholder="Masukkan foto ">
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
