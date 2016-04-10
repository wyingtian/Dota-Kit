@extends('layouts.master')
@section('content')
    @if(Session::has('success_message'))
        <div class="alert alert-success">{{ Session::get('success_message') }}</div>
    @endif
    <div>
        <div>
            <img id="{{Dota2\Hero::find($build['hero_id'])->id}}"
                 src=" {{Dota2\Hero::find($build['hero_id'])->pic_url_lg}}" alt="">
        </div>
        <div>
            <img id="{{Dota2\Item::find($build['item1_id'])->id}}"
                 src=" {{Dota2\Item::find($build['item1_id'])->pic_url}}" alt="">
            <img id="{{Dota2\Item::find($build['item2_id'])->id}}"
                 src=" {{Dota2\Item::find($build['item2_id'])->pic_url}}" alt="">
            <img id="{{Dota2\Item::find($build['item3_id'])->id}}"
                 src=" {{Dota2\Item::find($build['item3_id'])->pic_url}}" alt="">
            <img id="{{Dota2\Item::find($build['item4_id'])->id}}"
                 src=" {{Dota2\Item::find($build['item4_id'])->pic_url}}" alt="">
            <img id="{{Dota2\Item::find($build['item5_id'])->id}}"
                 src=" {{Dota2\Item::find($build['item5_id'])->pic_url}}" alt="">
            <img id="{{Dota2\Item::find($build['item6_id'])->id}}"
                 src=" {{Dota2\Item::find($build['item6_id'])->pic_url}}" alt="">
        </div>
        <a href="{{action('BuildController@edit',[$build['id']])}}"> edit </a>
    </div>
@stop

