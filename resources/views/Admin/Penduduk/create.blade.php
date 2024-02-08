@extends('Layouts.admin')

@section('content')

<h1>Tambah Penduduk</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">PENDUDUK</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="/admin/penduduk/store" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-md-8 form-group mb-3">
                                <input required type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan nama">
                            </div>
                
                            <div class="col-md-4">
                                <label for="nik">NIK</label>
                            </div>
                            <div class="col-md-8 form-group mb-3">
                                <input required type="text" id="nik" class="form-control" name="nik" placeholder="Masukkan NIK">
                            </div>
                
                            <div class="col-md-4">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-8 form-group mb-3">
                                <select required id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                
                            <div class="col-md-4">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-8 form-group mb-3">
                                <input required type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" placeholder="Masukkan tanggal lahir">
                            </div>
                
                            <div class="col-md-4">
                                <label for="profesi">Profesi</label>
                            </div>
                            <div class="col-md-8 form-group mb-3">
                                <input type="text" id="profesi" class="form-control" name="profesi" placeholder="Masukkan profesi">
                            </div>
                
                            <div class="col-md-4">
                                <label for="agama">Agama</label>
                            </div>
                            <div class="col-md-8 form-group mb-3">
                                <input type="text" id="agama" class="form-control" name="agama" placeholder="Masukkan agama">
                            </div>
                
                            <div class="col-md-4">
                                <label for="pendidikan">Pendidikan</label>
                            </div>
                            <div class="col-md-8 form-group mb-3">
                                <input type="text" id="pendidikan" class="form-control" name="pendidikan" placeholder="Masukkan pendidikan">
                            </div>
                
                            <div class="col-md-4">
                                <label for="perkawinan">Status Perkawinan</label>
                            </div>
                            <div class="col-md-8 form-group mb-3">
                                <select required id="perkawinan" class="form-control" name="perkawinan">
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
                                </select>
                            </div>
                
                            <div class="col-md-4">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-md-8 form-group mb-3">
                                <textarea id="alamat" class="form-control" name="alamat" placeholder="Masukkan alamat"></textarea>
                            </div>
                
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" value="save" name="submit" class="btn btn-primary mr-1 mb-1 mt-3">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
            </div>
        </div>
        </div>

@endsection
