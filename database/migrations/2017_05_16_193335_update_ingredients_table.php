<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('ingredients', function (Blueprint $table) {
        $table->dropColumn('measurement');

        $table->integer('measurement_id')->unsigned()->nullable();
        $table->foreign('measurement_id')->references('id')->on('measurements');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('ingredients', function (Blueprint $table) {
        $table->dropForeign(['measurement_id']);
        $table->dropColumn('measurement_id');

        $table->string('measurement');
      });
    }
}
