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

    public function index()
    {
        $builds = \Auth::user()->builds->toArray();
        $builds_count_user = count($builds);
        return view('builds.index', compact('builds', 'builds_count_user', 'builds_display_all_item'));
    }

    public function create()
    {
        $heroes = Hero::all();
        $items = Item::all();
        return view('builds.create', compact('heroes', 'items'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'build_hero' => 'required',
            'build_items' => 'required| regex:/draggable[0-9]+[^A-Za-z0-9]draggable[0-9]+[^A-Za-z0-9]draggable[0-9]+[^A-Za-z0-9]draggable[0-9]+[^A-Za-z0-9]draggable[0-9]+[^A-Za-z0-9]draggable[0-9]+$/',
        ]);
        $hero = substr($request->input('build_hero'), 9);
        $items = explode(",", $request->input('build_items'));
        $items_id = [];
        if (count($items) != 6) {
            abort(404);
        }
        foreach ($items as $item) {
            array_push($items_id, substr($item, 9));
        }
        $build = new Build;
        $build->user_id = \Auth::user()->id;
        $build->hero_id = $hero;
        $build->item1_id = $items_id[0];
        $build->item2_id = $items_id[1];
        $build->item3_id = $items_id[2];
        $build->item4_id = $items_id[3];
        $build->item5_id = $items_id[4];
        $build->item6_id = $items_id[5];
        $build->save();

        \Session::flash('message', 'Your customized build has been created');
        return redirect('build');
    }


    public function show($id)
    {
        $build = \Auth::user()->builds->find($id);
        return view('builds.show', compact('build'));
    }

    public function edit($id)
    {
        $heroes = Hero::all();
        $items = Item::all();
        $build = \Auth::user()->builds->find($id);
        return view('builds.edit', compact('build', 'heroes', 'items'));
    }

    public function update($id, Request $request){
        $build = \Auth::user()->builds->find($id);
        $build->item1_id = substr($request->input('edit_item1'),9);
        $build->item2_id = substr($request->input('edit_item2'),9);
        $build->item3_id = substr($request->input('edit_item3'),9);
        $build->item4_id = substr($request->input('edit_item4'),9);
        $build->item5_id = substr($request->input('edit_item5'),9);
        $build->item6_id = substr($request->input('edit_item6'),9);
        $build->save();
        \Session::flash('message', 'The build has been edited');
        return redirect("build/$id");
    }

    public function destroy($id){
        $build = \Auth::user()->builds->find($id);
        $build->delete();
        \Session::flash('message', 'The build has been deleted');
        return redirect('build');
    }
}