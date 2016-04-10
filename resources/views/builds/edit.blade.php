@extends('layouts.master')
@section('content')


    <form method='post' action="{{action('BuildController@update',[$build->id]) }}">
        {{ csrf_field() }}

        <div>
            <div>
                <img id="{{Dota2\Hero::find($build['hero_id'])->id}}"
                     src=" {{Dota2\Hero::find($build['hero_id'])->pic_url_lg}}" alt="">
            </div>
            <div>
                <div id="droppable_edit_item1" class="droppable_edit_item ui-widget-content">
                    <img id="{{Dota2\Item::find($build['item1_id'])->id}}"
                         src=" {{Dota2\Item::find($build['item1_id'])->pic_url}}" alt="">
                    <input id='edit_item1' type='hidden' name='edit_item1' value="draggable{{Dota2\Item::find($build['item1_id'])->id}}">
                </div>
                <div id="droppable_edit_item2" class="droppable_edit_item ui-widget-content">
                    <img id="{{Dota2\Item::find($build['item2_id'])->id}}"
                         src=" {{Dota2\Item::find($build['item2_id'])->pic_url}}" alt="">
                    <input id='edit_item2' type='hidden' name='edit_item2' value="draggable{{Dota2\Item::find($build['item2_id'])->id}}">
                </div>
                <div id="droppable_edit_item3" class="droppable_edit_item ui-widget-content">
                    <img id="{{Dota2\Item::find($build['item3_id'])->id}}"
                         src=" {{Dota2\Item::find($build['item3_id'])->pic_url}}" alt="">
                    <input id='edit_item3' type='hidden' name='edit_item3' value="draggable{{Dota2\Item::find($build['item3_id'])->id}}">
                </div>
                <div id="droppable_edit_item4" class="droppable_edit_item ui-widget-content">
                    <img id="{{Dota2\Item::find($build['item4_id'])->id}}"
                         src=" {{Dota2\Item::find($build['item4_id'])->pic_url}}" alt="">
                    <input id='edit_item4' type='hidden' name='edit_item4' value="draggable{{Dota2\Item::find($build['item4_id'])->id}}">
                </div>

                <div id="droppable_edit_item5" class="droppable_edit_item ui-widget-content">
                    <img id="{{Dota2\Item::find($build['item5_id'])->id}}"
                         src=" {{Dota2\Item::find($build['item5_id'])->pic_url}}" alt="">
                    <input id='edit_item5' type='hidden' name='edit_item5' value="draggable{{Dota2\Item::find($build['item5_id'])->id}}">
                </div>
                <div id="droppable_edit_item6" class="droppable_edit_item ui-widget-content">
                    <img id="{{Dota2\Item::find($build['item6_id'])->id}}"
                         src=" {{Dota2\Item::find($build['item6_id'])->pic_url}}" alt="">
                    <input id='edit_item6' type='hidden' name='edit_item6' value="draggable{{Dota2\Item::find($build['item6_id'])->id}}">
                </div>
            </div>

        </div>

        <input type='submit' value='Submit'>
    </form>


    <div class="row">

        <div class="col-md-12">
            <h2>Items</h2>
            <div class="grid-container">
                <ul class="rig columns-10">
                    @foreach ($items as $item )
                        <li>
                                <img class="draggable_item" id="draggable{{$item['id']}}" id="draggable"
                                     data-html="true" data-toggle="tooltip"
                                     title="<strong>{{$item['name']}} </strong> <p>Cost: {{$item['cost']}}</p> <p>{{$item['desc']}}</p> "
                                     src="{{$item['pic_url']}}">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@stop



