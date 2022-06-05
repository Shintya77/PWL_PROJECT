<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->string('id_Petugas',10)->index();
            $table->string('Nama',50);
            $table->string('Username',50);
            $table->date('TanggalLahir');
            $table->string('JenisKelamin',5);
            $table->integer('Usia');
            $table->string('Alamat',50);
            $table->string('Jabatan',50);
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
        Schema::dropIfExists('petugas');
    }
}
