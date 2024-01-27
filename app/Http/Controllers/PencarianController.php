<?php

namespace App\Http\Controllers;

use App\Models\DetailSyarat;
use Illuminate\Http\Request;
use App\Models\DokumenPendukung;
use App\Models\PersyaratanDokumen;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PencarianController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function pencarian(Request $request)
    {
        $keyword = $request->keyword;; // Ganti dengan keyword yang sesuai

        $results = DB::table('persyaratan_dokumen')
            ->where('nama', 'like', "%{$keyword}%")
            ->orWhere('singkatan', 'like', "%{$keyword}%")
            ->get();

        return view('Web.hasilpencarian',compact(['results']));
    }

    public function detailpencarian($id)
    {
        $data= PersyaratanDokumen::find($id);

        $syarat = DetailSyarat::where('persyaratan_dokumen_id', $id)->get();

        $dokumen = DokumenPendukung::where('persyaratan_dokumen_id', $id)->get();

        return view('Web.detailhasilpencarian',compact(['data','syarat','dokumen']));
    }

    
}
