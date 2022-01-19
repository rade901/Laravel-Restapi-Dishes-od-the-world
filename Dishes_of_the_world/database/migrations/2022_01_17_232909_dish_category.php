<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DishCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dish_category', function (Blueprint $table) {
            $table->unsignedBigInteger('dish_id');
            $table->foreign('dish_id')
            ->references('id')
            ->on('dishes')
            ->cascade('delete');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->cascade('delete');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes_categories');  
    }
}