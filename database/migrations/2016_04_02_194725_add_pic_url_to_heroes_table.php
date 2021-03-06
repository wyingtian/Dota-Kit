<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPicUrlToHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('heroes', function(Blueprint $table){
            $table->text('pic_url_sm');
            $table->text('pic_url_lg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('heroes',function (Blueprint $table){
            $table->dropColumn('pic_url_sm');
            $table->dropColumn('pic_url_lg');
        });
    }
}
