<?php

namespace App\Http\Controllers;

use App\Helpers\DeleteFile;
use App\Helpers\UploadFile;
use App\Models\Pejabat;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PejabatController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Pejabat::all();


        return view('Admin.Pejabat.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Admin.Pejabat.create');
    }

    public function store(Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $image_url =  UploadFile::upload("hero", $request->file('foto'));

        Pejabat::insert([
            "nama" => $request->nama,
            "jabatan" => $request->jabatan,
            "gambar" => $image_url, 
        ]);


        return redirect('/pejabat')->with("success_create", "Berhasil Menambahkan Data");
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= Pejabat::find($id);

        return view('Admin.Pejabat.edit',compact('data'));
    }


    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
    
        if ($request->foto == null) {
            Pejabat::where("id", $id)->update([
                "nama" => $request->nama,
                "jabatan" => $request->jabatan,
            ]);
            return redirect('/pejabat')->with("success_edit", "Berhasil Mengubah Data");
        }

        $data_hero = Pejabat::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        $image_url =  UploadFile::upload("pejabat", $request->file('foto'));

        Pejabat::where("id", $id)->update([
            "nama" => $request->nama,
            "jabatan" => $request->jabatan,
            "gambar" => $image_url,
        ]);

        return redirect('/pejabat')->with("success_edit", "Berhasil Mengubah Data");
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data_hero = Pejabat::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        Pejabat::where("id", $id)->delete();

        return redirect('/jabatan')->with("success_delete", "Berhasil Menghapus Data");
    }

}
