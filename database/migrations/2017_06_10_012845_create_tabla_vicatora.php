<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaVicatora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitacora', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_user')->unsigned();
            //foreign key
            $table->foreign('id_user')->references('id')->on('users');

            $table->string('tabla', 100);
            $table->string('action', 100);
            $table->string('valor_nuevo', 100);
            $table->string('valor_anterior', 100); 
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
        Schema::drop('vitacora');
    }
}
