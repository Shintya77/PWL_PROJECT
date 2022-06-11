<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('Kd_Pembayaran',10)->index();
            $table->string('Kd_Pinjaman',10);
            $table->string('NamaNasabah',50);
            $table->string('NamaBarang',50);
            $table->integer('TotalBayar');
            $table->date('TanggaAkhir');
            $table->string('Status',50);
            $table->timestamps();
            $table->foreign('Kd_Pinjaman')->references('Kd_Pinjaman')->on('Pinjaman'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
