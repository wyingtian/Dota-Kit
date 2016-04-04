<?php

namespace dota2\Http\Controllers;

use dota2\Hero;
use Dota2Api\Api;
use Dota2Api\Mappers;
use Illuminate\Http\Request;
use dota2\Http\Requests;

class dota2Controller extends Controller
{
    public function getDota2()
    {
        $heroes = Hero::all();
        return $heroes;
    }
}


//Api::init('866C486462F1FB0F82B9E1845E0DE56E', array('localhost', 'root', 'root', 'dota2', 'leagues'));
//        $leaguesMapperWeb = new Mappers\LeaguesMapperWeb();
//        $leagues = $leaguesMapperWeb->load();
//        foreach ($leagues as $leag) {
//        $saver = new Mappers\LeaguesMapperDB();
//        $saver->save($leag);
//        }
//        return dd($leag);
//        $mm = new Mappers\MatchMapperWeb(121995119);
//        $match = $mm->load();
//        $saver = new Mappers\MatchMapperDb();
//        $saver->save($match);