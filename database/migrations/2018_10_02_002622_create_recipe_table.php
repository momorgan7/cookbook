<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('instructions');
            $table->string('prep_time');
            $table->string('cook_time');
            $table->string('source');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cusine_id')->references('id')->on('cusine');
            $table->foreign('type_id')->references('id')->on('meal_type');
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
        Schema::dropIfExists('recipe');
    }
}
