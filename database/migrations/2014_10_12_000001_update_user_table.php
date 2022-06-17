<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('Username',50)->nullable();
            $table->string('Foto')->nullable();
            $table->date('TangalLahir')->nullable();
            $table->string('JenisKelamin',5)->nullable();
            $table->integer('Usia')->nullable();
            $table->string('Alamat',50)->nullable();
            $table->string('Pekerjaan',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('Username',50);
            $table->dropColumn('Foto');
            $table->dropColumn('TangalLahir');
            $table->dropColumn('JenisKelamin',5);
            $table->dropColumn('Usia');
            $table->dropColumn('Alamat',50);
            $table->dropColumn('Pekerjaan',50);
        });
    }
}
