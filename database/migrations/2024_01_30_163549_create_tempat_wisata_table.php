<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatWisataTable extends Migration
{
    public function up()
    {
        Schema::create('tempat_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat');
            $table->date('tanggal');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->string('lokasi');
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tempat_wisata');
    }
}
