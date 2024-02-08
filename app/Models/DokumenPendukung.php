<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenPendukung extends Model
{
    use HasFactory;
    protected $table='dokumen_pendukung';
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function persyaratanDokumen()
    {
        return $this->belongsTo(PersyaratanDokumen::class, 'persyaratan_dokumen_id');
    }
}
