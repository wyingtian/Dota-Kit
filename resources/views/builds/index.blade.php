@extends('layouts.master')

@if(Session::has('success_message'))
    <div class="alert alert-success">{{ Session::get('success_message') }}</div>
@endif

@section('content')

    @for ($i = 0; $i < $builds_count_user; $i++)
        <div>
            <div>
                <img id="{{Dota2\Hero::find($builds[$i]['hero_id'])->id}}"
                     src=" {{Dota2\Hero::find($builds[$i]['hero_id'])->pic_url_lg}}" alt="">

            </div>
            <div>
                <img id="{{Dota2\Item::find($builds[$i]['item1_id'])->id}}"
                     src=" {{Dota2\Item::find($builds[$i]['item1_id'])->pic_url}}" alt="">
                <img id="{{Dota2\Item::find($builds[$i]['item2_id'])->id}}"
                     src=" {{Dota2\Item::find($builds[$i]['item2_id'])->pic_url}}" alt="">
                <img id="{{Dota2\Item::find($builds[$i]['item3_id'])->id}}"
                     src=" {{Dota2\Item::find($builds[$i]['item3_id'])->pic_url}}" alt="">
                <img id="{{Dota2\Item::find($builds[$i]['item4_id'])->id}}"
                     src=" {{Dota2\Item::find($builds[$i]['item4_id'])->pic_url}}" alt="">
                <img id="{{Dota2\Item::find($builds[$i]['item5_id'])->id}}"
                     src=" {{Dota2\Item::find($builds[$i]['item5_id'])->pic_url}}" alt="">
                <img id="{{Dota2\Item::find($builds[$i]['item6_id'])->id}}"
                     src=" {{Dota2\Item::find($builds[$i]['item6_id'])->pic_url}}" alt="">
            </div>

            <a href="{{action('BuildController@show',[$builds[$i]['id']])}}"> show detail </a><br>
            <a href="{{action('BuildController@edit',[$builds[$i]['id']])}}"> edit </a>

        </div>
    @endfor



@stop

