<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarWisataTable extends Migration
{
    public function up()
    {
        Schema::create('gambar_wisata', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tempat_wisata_id');
            $table->foreign('tempat_wisata_id')->references('id')->on('tempat_wisata')->onDelete('cascade');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gambar_wisata');
    }
}
