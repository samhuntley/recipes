<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('measurement');
          $table->float('amount', 8, 2);
          $table->timestamps();

          $table->integer('recipe_id')->unsigned();
          $table->foreign('recipe_id')->references('id')->on('recipes');

          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
