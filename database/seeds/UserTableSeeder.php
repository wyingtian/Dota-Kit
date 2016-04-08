<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jill = new Dota2\User;
        $jill->name = "name" ;
        $jill->password = "helloworld";
        $jill->email="jill@harvard.edu";
        //created_at"=>Carbon::now()->toDateTimeString(),"updated_at"=>Carbon::now()->toDateTimeString()))
        $jill->save();

     //   $jamal = new Dota2\User(array("name" => "jamal","password"=> "helloworld","email=>jamal@harvard.edu","created_at"=>Carbon::now()->toDateTimeString(),"updated_at"=>Carbon::now()->toDateTimeString()));

        $jamal = new Dota2\User;
        $jamal->name = "name" ;
        $jamal->password = "helloworld";
        $jamal->email="jamal@harvard.edu";
        $jamal->save();
    }
}
