<?php

namespace dota2\Http\Controllers;

use dota2\Hero;
use dota2\Item;
use Dota2Api\Api;
use Dota2Api\Mappers;
use Illuminate\Http\Request;
use dota2\Http\Requests;

class dota2Controller extends Controller
{
    public function getDota2()
    {
        $heroes = Hero::all();
        $items = Item::all();

        return view('welcome',compact('heroes','items'));
    }
    public function postDota2(Request $request)
    {

        $hero = $request->input('build_hero');
        $items = $request-> input('build_items');
        return $items;
    }
}
