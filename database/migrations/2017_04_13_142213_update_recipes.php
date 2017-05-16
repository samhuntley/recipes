<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRecipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('recipes', function (Blueprint $table) {
        $table->text('instructions')->nullable()->change();;
        $table->text('story')->nullable()->change();;
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('recipes', function (Blueprint $table) {
        $table->text('instructions')->nullable(false)->change();;
        $table->text('story')->nullable(false)->change();;
      });
    }
}
