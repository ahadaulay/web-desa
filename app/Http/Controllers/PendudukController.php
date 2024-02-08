<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Profesi;
use App\Models\Penduduk;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PendudukController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Penduduk::all();

        return view('Admin.Penduduk.index',compact(['data']));
    }

    function create()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        return view('Admin.Penduduk.create');
    }

    public function store(Request $request)
    {
        // Pastikan ada session remember_token (user telah login)
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "Gagal login");
        }
    
        // Cek apakah profesi sudah ada, jika tidak, tambahkan
        $profesi = Profesi::firstOrCreate(['profesi' => $request->profesi]);
    
        // Cek apakah agama sudah ada, jika tidak, tambahkan
        $agama = Agama::firstOrCreate(['agama' => $request->agama]);
    
        // Cek apakah pendidikan sudah ada, jika tidak, tambahkan
        $pendidikan = Pendidikan::firstOrCreate(['pendidikan' => $request->pendidikan]);
    
        // Tambahkan data penduduk
        Penduduk::create([
            "nama" => $request->nama,
            "nik" => $request->nik,
            "jenis_kelamin" => $request->jenis_kelamin,
            "tanggal_lahir" => $request->tanggal_lahir,
            "profesi_id" => $profesi->id,
            "agama_id" => $agama->id,
            "pendidikan_id" => $pendidikan->id,
            "perkawinan" => $request->perkawinan,
            "alamat" => $request->alamat,
        ]);
    
        return redirect('/admin/penduduk')->with("success_create", "Berhasil Menambahkan Data");
    }
    

    public function edit($id){ 

        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data= Penduduk::find($id);

        return view('Admin.Penduduk.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {
        // Pastikan ada session remember_token (user telah login)
        if (empty(session()->get("remember_token"))) {
            return redirect("/loginIndex")->with("failed", "Gagal login");
        }
    
        // Validasi data input menggunakan Laravel Validation
        $request->validate([
            'nama' => 'required|string',
            'nik' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'profesi' => 'required|string',
            'agama' => 'required|string',
            'pendidikan' => 'required|string',
            'perkawinan' => 'required|string',
            'alamat' => 'required|string',
        ]);
    
        // Cari data penduduk berdasarkan ID
        $penduduk = Penduduk::find($id);
    
        // Jika data tidak ditemukan, kembalikan response dengan pesan error
        if (!$penduduk) {
            return redirect('/admin/penduduk')->with("failed", "Data tidak ditemukan");
        }
    
        // Cek apakah profesi sudah ada, jika tidak, tambahkan
        $profesi = Profesi::firstOrCreate(['profesi' => $request->profesi]);
    
        // Cek apakah agama sudah ada, jika tidak, tambahkan
        $agama = Agama::firstOrCreate(['agama' => $request->agama]);
    
        // Cek apakah pendidikan sudah ada, jika tidak, tambahkan
        $pendidikan = Pendidikan::firstOrCreate(['pendidikan' => $request->pendidikan]);
    
        // Update data penduduk
        $penduduk->update([
            "nama" => $request->nama,
            "nik" => $request->nik,
            "jenis_kelamin" => $request->jenis_kelamin,
            "tanggal_lahir" => $request->tanggal_lahir,
            "profesi_id" => $profesi->id,
            "agama_id" => $agama->id,
            "pendidikan_id" => $pendidikan->id,
            "perkawinan" => $request->perkawinan,
            "alamat" => $request->alamat,
        ]);
    
        return redirect('/admin/penduduk')->with("success_update", "Berhasil Memperbarui Data");
    }
    

    public function destroy($id)
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $data = Penduduk::where("id", $id)->first();

        Penduduk::where("id", $id)->delete();

        return redirect('/admin/penduduk')->with("success_delete", "Berhasil Menghapus Data");
    }

}
