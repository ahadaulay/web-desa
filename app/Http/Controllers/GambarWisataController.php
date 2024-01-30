<?php

namespace App\Http\Controllers;

use App\Helpers\DeleteFile;
use App\Helpers\UploadFile;
use App\Models\GambarWisata;
use App\Models\Wisata;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GambarWisataController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Wisata::where('id', $id)->first();

        $gambar = GambarWisata::where('tempat_wisata_id', $id)->get();


        return view('Admin.GambarWisata.index',compact(['data','gambar']));
    }

    function create($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= Wisata::find($id);

        return view('Admin.GambarWisata.create',compact(['data']));
    }

    public function store(Request $request , $id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $image_url =  UploadFile::upload("wisata", $request->file('gambar'));


        GambarWisata::insert([
            "tempat_wisata_id" => $request->tempat_wisata_id,
            "gambar" => $image_url,
        ]);


        return redirect('/admin/gambar_wisata/' . $id)->with("success_create", "Berhasil Menambahkan Data");
    }

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= GambarWisata::find($id);

        return view('Admin.GambarWisata.edit',compact('data'));
    }


    public function update($id, Request $request)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }
    
        if ($request->gambar == null) {
            GambarWisata::where("id", $id)->update([
                "tempat_wisata_id" => $request->tempat_wisata_id,
            ]);
            return redirect('/admin/gambar_wisata/' . $request->tempat_wisata_id)->with("success_create", "Berhasil Mengubah Data");
        }

        $data_hero = GambarWisata::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        $image_url =  UploadFile::upload("wisata", $request->file('gambar'));

        GambarWisata::where("id", $id)->update([
            "tempat_wisata_id" => $request->tempat_wisata_id,
            "gambar" => $image_url,
        ]);

        return redirect('/admin/gambar_wisata/' . $request->tempat_wisata_id)->with("success_create", "Berhasil Mengubah Data");
    }

    public function destroy($id,$tempat_wisata_id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data_hero = GambarWisata::where("id", $id)->first();

        DeleteFile::delete($data_hero->gambar);

        GambarWisata::where("id", $id)->delete();

        return redirect('/admin/gambar_wisata/' . $tempat_wisata_id)->with("success_delete", "Berhasil Menghapus Data");
    }

}
