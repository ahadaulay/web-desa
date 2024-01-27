<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersyaratanDokumen extends Model
{
    use HasFactory;
    protected $table='persyaratan_dokumen';
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function detailSyarat()
    {
        return $this->hasMany(DetailSyarat::class, 'persyaratan_dokumen_id');
    }
}
