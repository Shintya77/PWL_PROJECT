<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
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
            $table->string('Kd_Nasabah',10);
            $table->string('Nama',50);
            $table->string('Foto');
            $table->string('Pemilik',50);
            $table->date('TanggalMasuk');
            $table->date('TanggalKeluar');
            $table->integer('HargaGadai');
            $table->string('Status',50);
            $table->timestamps();
            $table->foreign('Kd_Nasabah')->references('Kd_Nasabah')->on('Nasabah'); 
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
