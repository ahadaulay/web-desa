<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->unsignedBigInteger('profesi_id')->nullable();
            $table->unsignedBigInteger('pendidikan_id')->nullable();
            $table->unsignedBigInteger('agama_id')->nullable();
            $table->string('perkawinan');
            $table->text('alamat');
            $table->timestamps();

            $table->foreign('profesi_id')->references('id')->on('profesi')->onDelete('set null');
            $table->foreign('pendidikan_id')->references('id')->on('pendidikan')->onDelete('set null');
            $table->foreign('agama_id')->references('id')->on('agama')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}
