<?php

namespace Dota2\Http\Controllers;

use Illuminate\Http\Request;
use Dota2\Item;
use Dota2\Http\Requests;

class ItemController extends Controller
{
    /**
     * Display a listing of the items.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index',compact('items'));
    }

    /**
     * Display the specified item.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $item = Item::findOrFail($id);
            return view('items.show',compact('item'));
    }

}
