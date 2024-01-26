<?php

// database/migrations/xxxx_xx_xx_create_beranda_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerandaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beranda', function (Blueprint $table) {
            $table->id();
            $table->string('gambar'); // Kolom untuk menyimpan nama file gambar
            $table->string('nama');   // Kolom untuk menyimpan nama
            $table->timestamps();      // Kolom waktu pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beranda');
    }
}
