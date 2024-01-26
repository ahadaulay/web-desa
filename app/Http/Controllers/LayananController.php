<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Helpers\DeleteFile;
use App\Helpers\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class LayananController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Layanan::all();


        return view('Admin.Layanan.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Admin.Layanan.create');
    }

    public function store(Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $image_url =  UploadFile::upload("layanan", $request->file('foto'));

        Layanan::insert([
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi,
            "gambar" => $image_url, 
        ]);


        return redirect('/layanan')->with("success_create", "Berhasil Menambahkan Data");
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= Layanan::find($id);

        return view('Admin.Layanan.edit',compact('data'));
    }


    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
    
        if ($request->foto == null) {
            Layanan::where("id", $id)->update([
                "nama" => $request->nama,
                "deskripsi" => $request->deskripsi,
            ]);
            return redirect('/layanan')->with("success_edit", "Berhasil Mengubah Data");
        }

        $data_hero = Layanan::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        $image_url =  UploadFile::upload("layanan", $request->file('foto'));

        Layanan::where("id", $id)->update([
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi,
            "gambar" => $image_url,
        ]);

        return redirect('/layanan')->with("success_edit", "Berhasil Mengubah Data");
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data_hero = Layanan::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        Layanan::where("id", $id)->delete();

        return redirect('/layanan')->with("success_delete", "Berhasil Menghapus Data");
    }

}
