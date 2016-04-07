<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builds',function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('hero_id')->unsigned();
            $table->integer('item1_id')->unsigned();
            $table->integer('item2_id')->unsigned();
            $table->integer('item3_id')->unsigned();
            $table->integer('item4_id')->unsigned();
            $table->integer('item5_id')->unsigned();
            $table->integer('item6_id')->unsigned();


            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('hero_id')
                ->references('id')
                ->on('heroes');
            $table->foreign('item1_id')
                ->references('id')
                ->on('items');
            $table->foreign('item2_id')
                ->references('id')
                ->on('items');
            $table->foreign('item3_id')
                ->references('id')
                ->on('items');
            $table->foreign('item4_id')
                ->references('id')
                ->on('items');
            $table->foreign('item5_id')
                ->references('id')
                ->on('items');
            $table->foreign('item6_id')
                ->references('id')
                ->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('builds');

    }
}
