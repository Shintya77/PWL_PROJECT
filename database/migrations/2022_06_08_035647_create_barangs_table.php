<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('Kd_Barang',10)->index();
            $table->string('Nama',50);
            $table->string('Foto');
            $table->string('Pemilik',50);
            $table->date('TanggalMasuk');
            $table->date('TanggalKeluar');
            $table->integer('HargaGadai');
            $table->string('Status',50);
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
        Schema::dropIfExists('barang');
    }
}
