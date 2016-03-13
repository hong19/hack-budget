<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodShareFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_share_food', function (Blueprint $table) {
            $table->integer('food_id')->unsigned()->index();
            $table->foreign('food_id')->references('id')->on('Foods')->onDelete('cascade');

            $table->integer('share_food_id')->unsigned()->index();
            $table->foreign('share_food_id')->references('id')->on('Share_Foods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('food_share_food');
    }
}
