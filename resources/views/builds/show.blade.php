@extends('layouts.master')
@section('head')
    <link rel="stylesheet" href="/css/build.css">
@endsection
@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-4 cl-effect-1">
            <a  href="/build">Back</a>
            <div class="text-center">
                <img class="center" id="{{Dota2\Hero::find($build['hero_id'])->id}}"
                     src=" {{Dota2\Hero::find($build['hero_id'])->pic_url_lg}}" alt="hero image">
                <h3>{{Dota2\Hero::find($build['hero_id'])->name}}</h3>
                <br>
            </div>
            <div>
                <img id="{{Dota2\Item::find($build['item1_id'])->id}}"
                     src=" {{Dota2\Item::find($build['item1_id'])->pic_url}}" alt="item1 image">
                {{Dota2\Item::find($build['item1_id'])->name}}
                <br>

                <img id="{{Dota2\Item::find($build['item2_id'])->id}}"
                     src=" {{Dota2\Item::find($build['item2_id'])->pic_url}}" alt="item2 image">
                {{Dota2\Item::find($build['item2_id'])->name}}
                <br>
                <img id="{{Dota2\Item::find($build['item3_id'])->id}}"
                     src=" {{Dota2\Item::find($build['item3_id'])->pic_url}}" alt="item3 image">
                {{Dota2\Item::find($build['item3_id'])->name}}
                <br>
                <img id="{{Dota2\Item::find($build['item4_id'])->id}}"
                     src=" {{Dota2\Item::find($build['item4_id'])->pic_url}}" alt="item4 image">
                {{Dota2\Item::find($build['item4_id'])->name}}
                <br>
                <img id="{{Dota2\Item::find($build['item5_id'])->id}}"
                     src=" {{Dota2\Item::find($build['item5_id'])->pic_url}}" alt="item5 image">
                {{Dota2\Item::find($build['item5_id'])->name}}
                <br>
                <img id="{{Dota2\Item::find($build['item6_id'])->id}}"
                     src=" {{Dota2\Item::find($build['item6_id'])->pic_url}}" alt="item6 image">
                {{Dota2\Item::find($build['item6_id'])->name}}

                <br>
                <br>
            </div>
            <div class="cl-effect-1 text-center">
            <a href="{{action('BuildController@edit',[$build['id']])}}"> Edit </a>

            <form method='post' action="/build/delete/{{$build['id']}}">
                {{ csrf_field() }}
                <input type="submit" value="delete">
            </form>
                </div>
        </div>
    </div>
@stop

