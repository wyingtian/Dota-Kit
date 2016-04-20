@extends('layouts.master')


@section('content')
    {{ Session::get('message') }}
    {{--@if(Session::get('message') != null )--}}
    {{--<div class="alert alert-success">{{ Session::get('message') }}</div>--}}
    {{--@endif--}}

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p>You have {{$builds_count_user}} builds <a href="/build/create">Create your first build</a></p>
    @for ($i = 0; $i < $builds_count_user; $i++)
        <p>This is your build {{$i + 1}} </p>
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
            <a href="{{action('BuildController@edit',[$builds[$i]['id']])}}"> edit </a> <br>

            <form method='post' action="/build/delete/{{$builds[$i]['id']}}">
                {{ csrf_field() }}
                <input type="submit" value="delete">
            </form>

        </div>
    @endfor
        </div>
    </div>

@stop

