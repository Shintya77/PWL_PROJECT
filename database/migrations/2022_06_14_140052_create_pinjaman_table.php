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
            $table->id();
            
            $table->UnsignedBigInteger('Kd_Nasabah',10);
            $table->string('Kd_Barang',10);
            $table->string('Pemilik',50);
            $table->string('Nama',50);
            $table->integer('JumlahPinjaman');
            $table->string('JangkaWaktu',50);
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
        Schema::dropIfExists('pinjaman');
    }
}
