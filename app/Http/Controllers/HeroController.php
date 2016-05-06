<?php

namespace Dota2\Http\Controllers;
use Dota2\Hero;
use Illuminate\Http\Request;

use Dota2\Http\Requests;

class HeroController extends Controller
{
    /**
     * Display a listing of the heroes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Hero::all();
        return view('heroes.index',compact('heroes'));
    }

    /**
     * Display the specified hero.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hero = Hero::findOrFail($id);

        return view('heroes.show',compact('hero'));
    }

}
