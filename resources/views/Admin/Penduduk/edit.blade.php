@extends('Layouts.admin')

@section('content')

<h1>Edit Penduduk</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">PENDUDUK</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/admin/penduduk/{{ $data->id }}" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                        
                                    <!-- Kolom Nama -->
                                    <div class="col-md-4">
                                        <label for="nama">Nama</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required type="text" id="nama" class="form-control" name="nama" value="{{ $data->nama }}">
                                    </div>
                        
                                    <!-- Kolom NIK -->
                                    <div class="col-md-4">
                                        <label for="nik">NIK</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required type="text" id="nik" class="form-control" name="nik" value="{{ $data->nik }}">
                                    </div>
                        
                                    <!-- Kolom Jenis Kelamin -->
                                    <div class="col-md-4">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <select required id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                            <option value="Laki-laki" {{ $data->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="Perempuan" {{ $data->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                        
                                    <!-- Tambahkan Kolom Tanggal Lahir -->
                                    <div class="col-md-4">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
                                    </div>
                        
                                    <!-- Tambahkan Kolom Profesi -->
                                    <div class="col-md-4">
                                        <label for="profesi">Profesi</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input type="text" id="profesi" class="form-control" name="profesi" value="{{ $data->profesi }}">
                                    </div>
                        
                                    <!-- Tambahkan Kolom Agama -->
                                    <div class="col-md-4">
                                        <label for="agama">Agama</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input type="text" id="agama" class="form-control" name="agama" value="{{ $data->agama }}">
                                    </div>
                        
                                    <!-- Tambahkan Kolom Pendidikan -->
                                    <div class="col-md-4">
                                        <label for="pendidikan">Pendidikan</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input type="text" id="pendidikan" class="form-control" name="pendidikan" value="{{ $data->pendidikan }}">
                                    </div>
                        
                                    <!-- Tambahkan Kolom Perkawinan -->
                                    <div class="col-md-4">
                                        <label for="perkawinan">Status Perkawinan</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <select required id="perkawinan" class="form-control" name="perkawinan">
                                            <option value="Belum Kawin" {{ $data->perkawinan === 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                                            <option value="Kawin" {{ $data->perkawinan === 'Kawin' ? 'selected' : '' }}>Kawin</option>
                                            <option value="Cerai Hidup" {{ $data->perkawinan === 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                                            <option value="Cerai Mati" {{ $data->perkawinan === 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                                        </select>
                                    </div>
                        
                                    <!-- Tambahkan Kolom Alamat -->
                                    <div class="col-md-4">
                                        <label for="alamat">Alamat</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <textarea id="alamat" class="form-control" name="alamat">{{ $data->alamat }}</textarea>
                                    </div>
                        
                                    <!-- Tombol Submit -->
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" value="save" name="submit" class="btn btn-primary mr-1 mb-1 mt-3">Update</button>
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
