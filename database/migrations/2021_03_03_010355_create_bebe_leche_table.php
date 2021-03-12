<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBebeLecheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bebe_leche', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('peso')->nullable();
            $table->integer('estatura')->nullable();
            $table->integer('cantidad')->nullable();
                      
            $table->boolean('visible')->default(true);

            $table->integer('bebe_id')->unsigned();            
            $table->integer('leche_id')->unsigned();

            $table->foreign('bebe_id')->references('id')->on('bebes')->onDelete('cascade')->onUpdate('cascade');           
            $table->foreign('leche_id')->references('id')->on('leches')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('bebe_leche');
    }
}
