<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('restaurant_name');
            $table->integer('cuisine_id')->unsigned();
            $table->foreign('cuisine_id')->references('id')->on('cuisines');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('admin_users');
            $table->string('restaurant_address');
            $table->integer('restaurant_seats');
            $table->string('restaurant_owner');
            $table->text('description');
            $table->decimal('rating')->default(0);
            $table->integer('views')->default(0);
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
        Schema::dropIfExists('restaurants');
    }
}
