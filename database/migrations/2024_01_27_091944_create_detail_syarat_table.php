<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSyaratTable extends Migration
{
    public function up()
    {
        Schema::create('detail_syarat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persyaratan_dokumen_id');
            $table->foreign('persyaratan_dokumen_id')->references('id')->on('persyaratan_dokumen')->onDelete('cascade');
            $table->text('syarat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_syarat');
    }
}
