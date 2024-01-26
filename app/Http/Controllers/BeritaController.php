<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pejabat;
use App\Helpers\DeleteFile;
use App\Helpers\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BeritaController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Berita::all();


        return view('Admin.Berita.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Admin.Berita.create');
    }

    public function store(Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $image_url =  UploadFile::upload("berita", $request->file('foto'));

        Berita::insert([
            "kategori" => $request->kategori,
            "judul" => $request->judul,
            "tanggal" => $request->tanggal,
            "isi" => $request->isi,
            "gambar" => $image_url, 
        ]);


        return redirect('/admin/berita')->with("success_create", "Berhasil Menambahkan Data");
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= Berita::find($id);

        return view('Admin.Berita.edit',compact('data'));
    }


    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
    
        if ($request->foto == null) {
            Berita::where("id", $id)->update([
                "kategori" => $request->kategori,
                "judul" => $request->judul,
                "tanggal" => $request->tanggal,
                "isi" => $request->isi,
            ]);
            return redirect('/admin/berita')->with("success_edit", "Berhasil Mengubah Data");
        }

        $data_hero = Berita::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        $image_url =  UploadFile::upload("berita", $request->file('foto'));

        Berita::where("id", $id)->update([
            "kategori" => $request->kategori,
            "judul" => $request->judul,
            "tanggal" => $request->tanggal,
            "isi" => $request->isi,
            "gambar" => $image_url, 
        ]);

        return redirect('/admin/berita')->with("success_edit", "Berhasil Mengubah Data");
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data_hero = Berita::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        Berita::where("id", $id)->delete();

        return redirect('/admin/berita')->with("success_delete", "Berhasil Menghapus Data");
    }

}
