<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasabahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->id('Kd_Nasabah');
            $table->string('Nama',50);
            $table->string('Username',50);
            $table->string('Foto');
            $table->date('TangalLahir');
            $table->string('JenisKelamin',5);
            $table->integer('Usia');
            $table->string('Alamat',50);
            $table->string('Pekerjaan',50);
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
        Schema::dropIfExists('nasabah');
    }
}
