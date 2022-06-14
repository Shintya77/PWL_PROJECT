<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGudangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gudang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Kd_Barang');
            $table->string('Nama',50);
            $table->string('Pemilik',50);
            $table->string('Deskripsi',50);
            $table->string('Kondisi',50);
            $table->string('Foto',50);
            $table->timestamps();

            $table->foreign('Kd_Barang')->references('Kd_Barang')->on('Barang'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gudang');
    }
}
