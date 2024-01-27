<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSyarat extends Model
{
    use HasFactory;
    protected $table='detail_syarat';
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function persyaratanDokumen()
    {
        return $this->belongsTo(PersyaratanDokumen::class, 'persyaratan_dokumen_id');
    }
}
