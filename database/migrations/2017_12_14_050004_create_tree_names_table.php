<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreeNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tree_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('common_name');
            $table->integer('tree_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('tree_id')->references('id')->on('trees');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('tree_names');
    }
}
