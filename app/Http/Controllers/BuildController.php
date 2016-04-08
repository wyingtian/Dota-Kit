<?php

namespace Dota2\Http\Controllers;

use Dota2\Hero;
use Dota2\Item;
use Dota2\Build;
use Dota2Api\Mappers;
use Illuminate\Http\Request;
use Dota2\Http\Requests;
use Dota2\Http\Controllers\Auth;
class BuildController extends Controller
{


    public function getDota2()
    {
        $heroes = Hero::all();
        $items = Item::all();

       return view('build',compact('heroes','items'));
    }
    public function postDota2(Request $request)
    {

        $hero =substr($request->input('build_hero'),9);
        $items = explode(",",$request-> input('build_items'));
        $items_id =[];
        foreach ($items as $item){
            array_push($items_id,substr($item,9));
        }
        $build = new Build;
        $build->user_id= \Auth::user()->id;
        $build->hero_id= $hero;
        $build->item1_id = 154;
        $build->item2_id = 154;
        $build->item3_id = 154;
        $build->item4_id = 154;
        $build->item5_id = 154;
        $build->item6_id = 154;

        $build->save();
        return \Auth::user()->id;
    }

    public function showBuilds(){
        $builds =  \Auth::user()->builds->toArray();
        $hero = Hero::whereId($builds[2]['hero_id'])->first();
        $item = Item::whereId($builds[2]['item1_id'])->first();

        //  $builds[0]->hero();
        return  $item;
    }
}