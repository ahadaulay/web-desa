<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\PersyaratanDokumen;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PersyaratanDokumenController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = PersyaratanDokumen::all();


        return view('Admin.PersyaratanDokumen.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Admin.PersyaratanDokumen.create');
    }

    public function store(Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        PersyaratanDokumen::insert([
            "singkatan" => $request->singkatan,
            "nama" => $request->nama,
        ]);


        return redirect('/admin/persyaratan_dokumen')->with("success_create", "Berhasil Menambahkan Data");
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= PersyaratanDokumen::find($id);

        return view('Admin.PersyaratanDokumen.edit',compact('data'));
    }


    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data_pengumuman = PersyaratanDokumen::where("id", $id)->first();

        PersyaratanDokumen::where("id", $id)->update([
            "singkatan" => $request->singkatan,
            "nama" => $request->nama,
        ]);

        return redirect('/admin/persyaratan_dokumen')->with("success_edit", "Berhasil Mengubah Data");
    }

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = PersyaratanDokumen::where("id", $id)->first();

        PersyaratanDokumen::where("id", $id)->delete();

        return redirect('/admin/persyaratan_dokumen')->with("success_delete", "Berhasil Menghapus Data");
    }

}
