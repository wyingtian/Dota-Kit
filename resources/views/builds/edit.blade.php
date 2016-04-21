@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-4">
        <Strong>To edit: Drag item from right to left </Strong>
            <br>
            <br>
        </div>
        <div class="col-md-2 col-md-offset-2">
            <form method='post' action="{{action('BuildController@update',[$build->id]) }}">
                {{ csrf_field() }}
                <div>
                    <img id="{{Dota2\Hero::find($build['hero_id'])->id}}"
                         src=" {{Dota2\Hero::find($build['hero_id'])->pic_url_lg}}" alt="">
                </div>
                <br>
                <div>
                    <br>
                    <div id="droppable_edit_item1" class="droppable_edit_item">
                        <img id="{{Dota2\Item::find($build['item1_id'])->id}}"
                             src=" {{Dota2\Item::find($build['item1_id'])->pic_url}}" alt="">
                        <input id='edit_item1' type='hidden' name='edit_item1'
                               value="draggable{{Dota2\Item::find($build['item1_id'])->id}}">
                    </div>
                    <br>
                    <div id="droppable_edit_item2" class="droppable_edit_item">
                        <img id="{{Dota2\Item::find($build['item2_id'])->id}}"
                             src=" {{Dota2\Item::find($build['item2_id'])->pic_url}}" alt="">
                        <input id='edit_item2' type='hidden' name='edit_item2'
                               value="draggable{{Dota2\Item::find($build['item2_id'])->id}}">
                    </div>
                    <br>
                    <div id="droppable_edit_item3" class="droppable_edit_item">
                        <img id="{{Dota2\Item::find($build['item3_id'])->id}}"
                             src=" {{Dota2\Item::find($build['item3_id'])->pic_url}}" alt="">
                        <input id='edit_item3' type='hidden' name='edit_item3'
                               value="draggable{{Dota2\Item::find($build['item3_id'])->id}}">
                    </div>
                    <br>
                    <div id="droppable_edit_item4" class="droppable_edit_item">
                        <img id="{{Dota2\Item::find($build['item4_id'])->id}}"
                             src=" {{Dota2\Item::find($build['item4_id'])->pic_url}}" alt="">
                        <input id='edit_item4' type='hidden' name='edit_item4'
                               value="draggable{{Dota2\Item::find($build['item4_id'])->id}}">
                    </div>
                    <br>
                    <div id="droppable_edit_item5" class="droppable_edit_item">
                        <img id="{{Dota2\Item::find($build['item5_id'])->id}}"
                             src=" {{Dota2\Item::find($build['item5_id'])->pic_url}}" alt="">
                        <input id='edit_item5' type='hidden' name='edit_item5'
                               value="draggable{{Dota2\Item::find($build['item5_id'])->id}}">
                    </div>
                    <br>
                    <div id="droppable_edit_item6" class="droppable_edit_item">
                        <img id="{{Dota2\Item::find($build['item6_id'])->id}}"
                             src=" {{Dota2\Item::find($build['item6_id'])->pic_url}}" alt="">
                        <input id='edit_item6' type='hidden' name='edit_item6'
                               value="draggable{{Dota2\Item::find($build['item6_id'])->id}}">
                    </div>

                </div>
                <br>
                <input type='submit' value='Submit'>
            </form>
        </div>

        {{--<div class="row">--}}

        <div class="col-md-6 col-md-offset-1">
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
        {{--</div>--}}
    </div>
    </div>
@stop



