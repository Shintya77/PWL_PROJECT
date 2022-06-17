<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UbahRelasiBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->dropForeign('barang_kd_nasabah_foreign');
            $table->dropColumn('Kd_Nasabah');
            $table->unsignedBigInteger('Id_Nasabah');
            $table->foreign('Id_Nasabah')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barang', function(Blueprint $table){
            $table->dropForeign('barang_id_nasabah_foreign');
            $table->dropColumn('Id_Nasabah');
        });
    }
}
