<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Stores', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('store_name', 100);

            $table->string('address', 240)->nullable();
            $table->string('phone', 32)->nullable();
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Stores');
    }
}
