<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items',function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->text('pic_url');
            $table->string('name');
            $table->string('qual');
            $table->integer('cost');
            $table->text('desc');
            $table->text('notes');
            $table->text('attrib');
            $table->string('mc');
            $table->string('cd');
            $table->string('lore');
           // $table->string('components');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dro('items');
    }
}
