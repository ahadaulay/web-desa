<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarWisata extends Model
{
    use HasFactory;
    protected $table='gambar_wisata';
    protected $guarded = [];
    protected $primaryKey = 'id';
}
