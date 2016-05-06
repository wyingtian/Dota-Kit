@extends('layouts.master')
@section('head')
    <link rel="stylesheet" href="/css/build.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @if ($builds_count_user == 0)
                <h2>You have {{$builds_count_user}} builds <a href="/build/create">   Create your first build</a></h2>
            @else
                <a  href="/build/create">Create a new build</a>
            @endif
            @for ($i = 0; $i < $builds_count_user; $i++)
                <hr>
                <h3> Build {{$i + 1}} </h3>
                <div>
                    <div>
                        <img class="center" id="{{Dota2\Hero::find($builds[$i]['hero_id'])->id}}"
                             src=" {{Dota2\Hero::find($builds[$i]['hero_id'])->pic_url_lg}}" alt="hero image">
                        <br>
                    </div>
                    <div>
                        <img id="{{Dota2\Item::find($builds[$i]['item1_id'])->id}}"
                             src=" {{Dota2\Item::find($builds[$i]['item1_id'])->pic_url}}" alt="item1 image">
                        <img id="{{Dota2\Item::find($builds[$i]['item2_id'])->id}}"
                             src=" {{Dota2\Item::find($builds[$i]['item2_id'])->pic_url}}" alt="item2 image">
                        <img id="{{Dota2\Item::find($builds[$i]['item3_id'])->id}}"
                             src=" {{Dota2\Item::find($builds[$i]['item3_id'])->pic_url}}" alt="item3 image">
                        <img id="{{Dota2\Item::find($builds[$i]['item4_id'])->id}}"
                             src=" {{Dota2\Item::find($builds[$i]['item4_id'])->pic_url}}" alt="item4 image">
                        <img id="{{Dota2\Item::find($builds[$i]['item5_id'])->id}}"
                             src=" {{Dota2\Item::find($builds[$i]['item5_id'])->pic_url}}" alt="item5 image">
                        <img id="{{Dota2\Item::find($builds[$i]['item6_id'])->id}}"
                             src=" {{Dota2\Item::find($builds[$i]['item6_id'])->pic_url}}" alt="item6 image">
                    </div>
                    <div class="cl-effect-1 text-center">

                        <a class="center" href="{{action('BuildController@show',[$builds[$i]['id']])}}"> Show Build
                            Detail </a><br>
                        <a href="{{action('BuildController@edit',[$builds[$i]['id']])}}"> Edit Build </a> <br>
                    </div>
                    <form method='post' action="/build/delete/{{$builds[$i]['id']}}">
                        {{ csrf_field() }}
                        <input class="button" type="submit" value="delete">
                    </form>

                </div>
            @endfor
        </div>
    </div>

@stop

