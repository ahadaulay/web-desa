<?php

namespace App\Http\Controllers;

use App\Helpers\DeleteFile;
use App\Models\Beranda;
use App\Helpers\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HeroController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Beranda::all();


        return view('Admin.Hero.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Admin.Hero.create');
    }

    public function store(Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $image_url =  UploadFile::upload("hero", $request->file('foto'));

        Beranda::insert([
            "nama" => $request->nama,
            "gambar" => $image_url, 
        ]);


        return redirect('/heros')->with("success_create", "Berhasil Menambahkan Data");
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= Beranda::find($id);

        return view('Admin.Hero.edit',compact('data'));
    }


    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
    
        if ($request->foto == null) {
            Beranda::where("id", $id)->update([
                "nama" => $request->nama,
            ]);
            return redirect('/heros')->with("success_edit", "Berhasil Mengubah Data");
        }

        $data_hero = Beranda::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        $image_url =  UploadFile::upload("hero", $request->file('foto'));

        Beranda::where("id", $id)->update([
            "nama" => $request->nama,
            "gambar" => $image_url,
        ]);

        return redirect('/heros')->with("success_edit", "Berhasil Mengubah Data");
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data_hero = Beranda::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        Beranda::where("id", $id)->delete();

        return redirect('/heros')->with("success_delete", "Berhasil Menghapus Data");
    }

}
