<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateTableData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios_data', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_producto')->unsigned();
            //foreign key
            $table->foreign('id_producto')->references('id')->on('productos');

            $table->double('precio', 15, 8);

            $table->integer('id_usuario')->unsigned();
            //foreign key
            $table->foreign('id_usuario')->references('id')->on('users');

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
        Schema::drop('precios_data');
    }
}
