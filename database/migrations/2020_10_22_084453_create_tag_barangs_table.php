<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_tag');
            $table->unsignedBigInteger('id_barang');
            $table->timestamps();

            $table->foreign('id_tag')->references('id')->on('tag')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_barang')->references('id')->on('barang')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_barang');
    }
}
