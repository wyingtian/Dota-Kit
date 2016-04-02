<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes',function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('bio');
            $table->string('atk_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dro('heroes');
    }
}
