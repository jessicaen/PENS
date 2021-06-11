<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKfsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kfsales', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Produk');
            $table->string('Nama_Bisnis_Manager');
            $table->string('Provinsi');
            $table->integer('Qty_Sales');
            $table->string('Satuan');
            $table->string('Tanggal_Upload');
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
        Schema::dropIfExists('kfsales');
    }
}
