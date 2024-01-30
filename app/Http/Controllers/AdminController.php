<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Beranda;
use App\Models\Layanan;
use App\Models\Pejabat;
use App\Models\Penduduk;
use App\Models\Pengumuman;
use App\Models\Wisata;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dashboard()
    {
        if (session()->get("remember_token") == "") {
            return redirect("/loginIndex")->with("failed", "gagal login");
        }

        $beranda = Beranda::all()->count();
        $berita = Berita::all()->count();
        $layanan = Layanan::all()->count();
        $pejabat = Pejabat::all()->count();
        $penduduk = Penduduk::all()->count();
        $pengumuman = Pengumuman::all()->count();
        $wisata = Wisata::all()->count();
        
        return view('Admin.dashboard',compact(['beranda','berita','layanan','pejabat','penduduk','pengumuman','wisata']));
    }

}
