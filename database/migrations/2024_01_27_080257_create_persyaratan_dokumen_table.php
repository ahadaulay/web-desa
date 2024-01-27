<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersyaratanDokumenTable extends Migration
{
    public function up()
    {
        Schema::create('persyaratan_dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('singkatan');
            $table->string('nama');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('persyaratan_dokumen');
    }
}
