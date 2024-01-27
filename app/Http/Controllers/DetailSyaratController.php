<?php

namespace App\Http\Controllers;

use App\Models\DetailSyarat;
use App\Models\PersyaratanDokumen;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DetailSyaratController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = PersyaratanDokumen::where('id', $id)->first();

        $persyaratan = DetailSyarat::where('persyaratan_dokumen_id', $id)->get();


        return view('Admin.DetailSyarat.index',compact(['data','persyaratan']));
    }

    function create($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= PersyaratanDokumen::find($id);

        return view('Admin.DetailSyarat.create',compact('data'));
    }

    public function store(Request $request,$id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        DetailSyarat::insert([
            "persyaratan_dokumen_id" => $request->persyaratan_dokumen_id,
            "syarat" => $request->syarat,
        ]);


        return redirect('/admin/detail_syarat/' . $id)->with("success_create", "Berhasil Menambahkan Data");
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= DetailSyarat::find($id);

        return view('Admin.DetailSyarat.edit',compact('data'));
    }


    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data_pengumuman = DetailSyarat::where("id", $id)->first();

        DetailSyarat::where("id", $id)->update([
            "persyaratan_dokumen_id" => $request->persyaratan_dokumen_id,
            "syarat" => $request->syarat,
        ]);

        return redirect('/admin/detail_syarat/' . $request->persyaratan_dokumen_id)->with("success_create", "Berhasil Mengubah Data");
    }

    public function destroy($id,$persyaratan_dokumen_id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = DetailSyarat::where("id", $id)->first();

        DetailSyarat::where("id", $id)->delete();

        return redirect('/admin/detail_syarat/' . $persyaratan_dokumen_id)->with("success_delete", "Berhasil Menghapus Data");
    }

}
