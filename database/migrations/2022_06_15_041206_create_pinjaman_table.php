<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->id('Kd_Pinjaman');
            $table->UnsignedBigInteger('Kd_Nasabah');
            $table->UnsignedBigInteger('Kd_Barang');
            $table->string('Pemilik',50);
            $table->string('Nama',50);
            $table->integer('JumlahPinjaman');
            $table->string('JangkaWaktu',50);
            $table->timestamps();

            
            $table->foreign('Kd_Barang')->references('Kd_Barang')->on('Barang'); 
            
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
        Schema::dropIfExists('pinjaman');
    }
}
