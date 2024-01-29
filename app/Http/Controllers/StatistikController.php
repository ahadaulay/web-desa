<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\PersyaratanDokumen;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class StatistikController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function profesi()
    {
        $penduduk = Penduduk::count();
        $profesiData = DB::table('penduduk')
            ->select('profesi.profesi as profesi_nama', DB::raw('COUNT(*) as count'))
            ->join('profesi', 'penduduk.profesi_id', '=', 'profesi.id')
            ->groupBy('profesi.profesi') // Mengubah grouping ke kolom 'profesi.profesi'
            ->get();
    
        $profesiLabels = $profesiData->pluck('profesi_nama')->toArray();
        $profesiCounts = $profesiData->pluck('count')->toArray();
    
        $profesiArray = $profesiData->map(function ($item) {
            return [
                'profesi' => $item->profesi_nama, // Menggunakan alias yang benar
                'jumlah' => $item->count,
            ];
        })->toArray();
    
        return view('Web.Statistik.profesi', compact(['profesiLabels', 'profesiCounts', 'profesiArray','penduduk']));
    }

    public function pendidikan()
{
    $penduduk = Penduduk::count();
    
    $pendidikanData = DB::table('penduduk')
        ->select('pendidikan.pendidikan as pendidikan_nama', DB::raw('COUNT(*) as count'))
        ->join('pendidikan', 'penduduk.pendidikan_id', '=', 'pendidikan.id')
        ->groupBy('pendidikan.pendidikan') // Mengubah grouping ke kolom 'pendidikan.pendidikan'
        ->get();

    $pendidikanLabels = $pendidikanData->pluck('pendidikan_nama')->toArray();
    $pendidikanCounts = $pendidikanData->pluck('count')->toArray();

    $pendidikanArray = $pendidikanData->map(function ($item) {
        return [
            'pendidikan' => $item->pendidikan_nama, // Menggunakan alias yang benar
            'jumlah' => $item->count,
        ];
    })->toArray();

    return view('Web.Statistik.pendidikan', compact(['pendidikanLabels', 'pendidikanCounts', 'pendidikanArray', 'penduduk']));
}

public function agama()
{
    $penduduk = Penduduk::count();
    
    $agamaData = DB::table('penduduk')
        ->select('agama.agama as agama_nama', DB::raw('COUNT(*) as count'))
        ->join('agama', 'penduduk.agama_id', '=', 'agama.id')
        ->groupBy('agama.agama') // Mengubah grouping ke kolom 'agama.agama'
        ->get();

    $agamaLabels = $agamaData->pluck('agama_nama')->toArray();
    $agamaCounts = $agamaData->pluck('count')->toArray();

    $agamaArray = $agamaData->map(function ($item) {
        return [
            'agama' => $item->agama_nama, // Menggunakan alias yang benar
            'jumlah' => $item->count,
        ];
    })->toArray();

    return view('Web.Statistik.agama', compact(['agamaLabels', 'agamaCounts', 'agamaArray', 'penduduk']));
}

public function gender()
{
    $penduduk = Penduduk::count();
    
    $jenisKelaminData = DB::table('penduduk')
        ->select('jenis_kelamin', DB::raw('COUNT(*) as count'))
        ->groupBy('jenis_kelamin')
        ->get();

    $jenisKelaminLabels = $jenisKelaminData->pluck('jenis_kelamin')->toArray();
    $jenisKelaminCounts = $jenisKelaminData->pluck('count')->toArray();

    $jenisKelaminArray = $jenisKelaminData->map(function ($item) {
        return [
            'jenis_kelamin' => $item->jenis_kelamin,
            'jumlah' => $item->count,
        ];
    })->toArray();

    return view('Web.Statistik.gender', compact(['jenisKelaminLabels', 'jenisKelaminCounts', 'jenisKelaminArray', 'penduduk']));
}



    

}
