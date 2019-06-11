<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCookbookListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cookbook_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('recipe_id')->unsigned();
            $table->integer('ingredient_id')->unsigned();
            $table->integer('weight');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('recipe_id')->references('recipe_id')
                ->on('cookbook_recipes');
            $table->foreign('ingredient_id')->references('ingredient_id')
                ->on('cookbook_ingredients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cookbook_lists');
    }
}
