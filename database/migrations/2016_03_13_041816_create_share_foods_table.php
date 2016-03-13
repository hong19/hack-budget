<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShareFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Share_Foods', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('user_name', 60);
            $table->integer('personal_price')->unsigned();
            $table->integer('max_person')->unsigned();
            $table->integer('current_person')->unsigned();
            $table->string('address', 240)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Share_Foods');
    }
}
