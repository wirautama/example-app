<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_transaksi')->unique();
            $table->unsignedBigInteger('nim');
            $table->string('nama');
            $table->string('kode_jurusan');
            $table->string('jurusan');
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
        Schema::dropIfExists('data_transaksi', function (Blueprint $table) {

            $table->dropForeign('id');
            $table->dropForeign('kode_jurusan');
        });
    }
}
