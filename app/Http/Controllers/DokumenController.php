<?php

namespace App\Http\Controllers;

use App\Helpers\DeleteFile;
use App\Helpers\UploadFile;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DokumenController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Dokumen::all();


        return view('Admin.Dokumen.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Admin.Dokumen.create');
    }

    public function store(Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $dokumen_url =  UploadFile::upload("dokumen", $request->file('dokumen'));


        Dokumen::insert([
            "nama" => $request->nama,
            "singkatan" => $request->singkatan,
            "dokumen" => $dokumen_url,
        ]);


        return redirect('/admin/dokumen')->with("success_create", "Berhasil Menambahkan Data");
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= Dokumen::find($id);

        return view('Admin.Dokumen.edit',compact('data'));
    }


    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

    
        if ($request->foto == null) {
            Dokumen::where("id", $id)->update([
                "nama" => $request->nama,
                "singkatan" => $request->singkatan,
            ]);
            return redirect('/admin/dokumen')->with("success_edit", "Berhasil Mengubah Data");
        }

        $data_hero = Dokumen::where("id", $id)->first();

        DeleteFile::delete($data_hero->dokumen);

        $dokumen_url =  UploadFile::upload("Dokumen", $request->file('dokumen'));

        Dokumen::where("id", $id)->update([
            "nama" => $request->nama,
            "singkatan" => $request->singkatan,
            "dokumen" => $dokumen_url,
        ]);

        return redirect('/admin/dokumen')->with("success_edit", "Berhasil Mengubah Data");
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data_hero = Dokumen::where("id", $id)->first();

        DeleteFile::delete($data_hero->dokumen);

        Dokumen::where("id", $id)->delete();

        return redirect('/admin/dokumen')->with("success_delete", "Berhasil Menghapus Data");
    }

}
