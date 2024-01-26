@extends('Layouts.admin')

@section('content')

<h1>Edit Berita</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">BERITA</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/admin/berita/{{$data->id}}" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="nama">kategori</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required value="{{ $data->kategori}}" type="text" id="kategori" class="form-control" name="kategori" placeholder="Masukkan nama">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="deskripsi">judul</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required value="{{ $data->judul }}" type="text"  class="form-control" name="judul" placeholder="Masukkan jabatan">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="deskripsi">tanggal</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <input required value="{{ $data->tanggal }}" type="date"  class="form-control" name="tanggal" placeholder="Masukkan jabatan">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="deskripsi">Isi</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-3">
                                        <textarea value="{{ $data->isi}}"  cols="30" rows="10" required type="textarea" id="first-name" class="form-control" name="isi" placeholder="Masukkan isi">{{ $data->isi }}</textarea>
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
