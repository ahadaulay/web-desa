<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumenPendukung;
use App\Models\PersyaratanDokumen;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DokumenPendukungController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = PersyaratanDokumen::where('id', $id)->first();

        $persyaratan = DokumenPendukung::where('persyaratan_dokumen_id', $id)->get();


        return view('Admin.DokumenPendukung.index',compact(['data','persyaratan']));
    }

    function create($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= PersyaratanDokumen::find($id);

        return view('Admin.DokumenPendukung.create',compact('data'));
    }

    public function store(Request $request,$id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        DokumenPendukung::insert([
            "persyaratan_dokumen_id" => $request->persyaratan_dokumen_id,
            "dokumen" => $request->dokumen,
        ]);


        return redirect('/admin/dokumen_pendukung/' . $id)->with("success_create", "Berhasil Menambahkan Data");
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= DokumenPendukung::find($id);

        return view('Admin.DokumenPendukung.edit',compact('data'));
    }


    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data_pengumuman = DokumenPendukung::where("id", $id)->first();

        DokumenPendukung::where("id", $id)->update([
            "persyaratan_dokumen_id" => $request->persyaratan_dokumen_id,
            "dokumen" => $request->dokumen,
        ]);

        return redirect('/admin/dokumen_pendukung/' . $request->persyaratan_dokumen_id)->with("success_create", "Berhasil Mengubah Data");
    }

    public function destroy($id,$persyaratan_dokumen_id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = DokumenPendukung::where("id", $id)->first();

        DokumenPendukung::where("id", $id)->delete();

        return redirect('/admin/dokumen_pendukung/' . $persyaratan_dokumen_id)->with("success_delete", "Berhasil Menghapus Data");
    }

}
