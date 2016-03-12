<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Foods', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name', 100);
            $table->integer('price')->unsigned();
            $table->integer('cal')->unsigned();
            $table->integer('food_type_id')->unsigned();
            $table->integer('store_id')->unsigned();

            $table->foreign('food_type_id')->references('id')->on('Food_Types');
            $table->foreign('store_id')->references('id')->on('Stores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Foods');
    }
}
