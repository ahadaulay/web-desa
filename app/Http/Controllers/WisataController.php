<?php

namespace App\Http\Controllers;

use App\Helpers\DeleteFile;
use App\Helpers\UploadFile;
use App\Models\Wisata;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WisataController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Wisata::latest()->get();


        return view('Admin.Wisata.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Admin.Wisata.create');
    }

    public function store(Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $image_url =  UploadFile::upload("wisata", $request->file('foto'));

        $slug = Str::slug($request->nama_tempat,'-');

        Wisata::insert([
            "nama_tempat" => $request->nama_tempat,
            "tanggal" => $request->tanggal,
            "deskripsi" => $request->deskripsi,
            "lokasi" => $request->lokasi,
            "gambar" => $image_url,
            "slug" => $slug, 
        ]);


        return redirect('/admin/wisata')->with("success_create", "Berhasil Menambahkan Data");
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= Wisata::find($id);

        return view('Admin.Wisata.edit',compact('data'));
    }


    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $slug = Str::slug($request->nama_tempat,'-');
    
        if ($request->foto == null) {
            Wisata::where("id", $id)->update([
                "nama_tempat" => $request->nama_tempat,
                "tanggal" => $request->tanggal,
                "deskripsi" => $request->deskripsi,
                "lokasi" => $request->lokasi,
                "slug" => $slug, 
            ]);
            return redirect('/admin/wisata')->with("success_edit", "Berhasil Mengubah Data");
        }

        $data_hero = Wisata::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        $image_url =  UploadFile::upload("wisata", $request->file('foto'));

        Wisata::where("id", $id)->update([
            "nama_tempat" => $request->nama_tempat,
            "tanggal" => $request->tanggal,
            "deskripsi" => $request->deskripsi,
            "lokasi" => $request->lokasi,
            "gambar" => $image_url,
            "slug" => $slug, 
        ]);

        return redirect('/admin/wisata')->with("success_edit", "Berhasil Mengubah Data");
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data_hero = Wisata::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        Wisata::where("id", $id)->delete();

        return redirect('/admin/wisata')->with("success_delete", "Berhasil Menghapus Data");
    }

}
