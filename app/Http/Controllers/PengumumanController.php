<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Helpers\DeleteFile;
use App\Helpers\UploadFile;
use App\Models\Pejabat;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PengumumanController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Pengumuman::all();


        return view('Admin.Pengumuman.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Admin.Pengumuman.create');
    }

    public function store(Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        Pengumuman::insert([
            "isi" => $request->isi,
            "tanggal" => $request->tanggal,
            "pejabat" => $request->pejabat,
        ]);


        return redirect('/pengumuman')->with("success_create", "Berhasil Menambahkan Data");
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= Pengumuman::find($id);

        return view('Admin.Pengumuman.edit',compact('data'));
    }


    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data_pengumuman = Pengumuman::where("id", $id)->first();

        Pengumuman::where("id", $id)->update([
            "isi" => $request->isi,
            "tanggal" => $request->tanggal,
            "pejabat" => $request->pejabat,
        ]);

        return redirect('/pengumuman')->with("success_edit", "Berhasil Mengubah Data");
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Pengumuman::where("id", $id)->first();

        Pengumuman::where("id", $id)->delete();

        return redirect('/pengumuman')->with("success_delete", "Berhasil Menghapus Data");
    }

}
