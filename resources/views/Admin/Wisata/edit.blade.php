@extends('Layouts.admin')

@section('content')

<h1>Edit Wisata</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">WISATA</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/admin/wisata/{{$data->id}}" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="nama">nama tempat</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required value="{{ $data->nama_tempat}}" type="text" id="nama_tempat" class="form-control" name="nama_tempat" placeholder="Masukkan nama">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="deskripsi">tanggal</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required value="{{ $data->tanggal }}" type="date"  class="form-control" name="tanggal" placeholder="Masukkan jabatan">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="deskripsi">deskripsi</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <textarea value="{{ $data->deskripsi}}"  cols="30" rows="10" required type="textarea" id="first-name" class="form-control" name="deskripsi" placeholder="Masukkan deskripsi">{{ $data->deskripsi }}</textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="deskripsi">lokasi</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required value="{{ $data->lokasi }}" type="text"  class="form-control" name="lokasi" placeholder="Masukkan lokasi">
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
