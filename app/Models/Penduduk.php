<?php

namespace App\Models;

use App\Models\Agama;
use App\Models\Profesi;
use App\Models\Pendidikan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penduduk extends Model
{
    use HasFactory;
    protected $table='penduduk';
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function Agama()
    {
        return $this->belongsTo(Agama::class, 'agama_id');
    }

    public function Pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'pendidikan_id');
    }

    public function Profesi()
    {
        return $this->belongsTo(Profesi::class, 'profesi_id');
    }
}
