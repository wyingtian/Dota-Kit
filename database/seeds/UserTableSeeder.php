<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $jill = new Dota2\User(array("name" => "Jill","password"=> "helloworld","email=>jill@harvard.edu","created_at"=>Carbon::now()->toDateTimeString(),"updated_at"=>Carbon::now()->toDateTimeString()));
        $jill->save();

        $jamal = new Dota2\User(array("name" => "jamal","password"=> "helloworld","email=>jamal@harvard.edu","created_at"=>Carbon::now()->toDateTimeString(),"updated_at"=>Carbon::now()->toDateTimeString()));
        $jamal->save();
    }
}
