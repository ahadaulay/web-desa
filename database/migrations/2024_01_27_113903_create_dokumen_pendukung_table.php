<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen_pendukung', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persyaratan_dokumen_id');
            $table->foreign('persyaratan_dokumen_id')->references('id')->on('persyaratan_dokumen')->onDelete('cascade');
            $table->text('dokumen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokumen_pendukung');
    }
};
