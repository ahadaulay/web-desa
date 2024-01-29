<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Beranda;
use App\Models\Layanan;
use App\Models\Pejabat;
use App\Models\Pengumuman;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function beranda()
    {
        $beranda = Beranda::all();
        $layanan = Layanan::all();
        $pejabat = Pejabat::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::latest()->limit(6)->get();



        return view('Web.beranda',compact(['beranda','layanan','pejabat','pengumuman','berita']));
    }

    public function profile()
    {
        return view('Web.profil');
    }

    public function visimisi()
    {
        return view('Web.visimisi');
    }

    public function tugasfungsi()
    {
        return view('Web.tugasfungsi');
    }

    public function strukturpejabat()
    {
        return view('Web.strukturpejabat');
    }

    public function berita()
    {
        $berita = Berita::all();

        return view('Web.berita',compact(['berita']));
    }

    public function beritadetail($id)
    {
        $berita = Berita::where("id", $id)->first();
        

        return view('Web.detailberita',compact(['berita']));
    }

    public function wisata()
    {
        return view('Web.wisata');
    }

    public function detailwisata()
    {
        return view('Web.detailwisata');
    }


    public function kontak()
    {
        return view('Web.kontak');
    }

    public function hasilpencarian()
    {
        return view('Web.hasilpencarian');
    }
}
