@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">


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

            {{--{{ Form::open(['method' => 'delete', 'action' => array('BuildController@destroy', $build->id)]) }}--}}
            {{--{{ Form::hidden('id', $build->id) }}--}}
            {{--{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}--}}
            {{--{{ Form::close() }}--}}
            <form method='post' action="/build/delete/{{$build['id']}}">
                {{ csrf_field() }}
                <input type="submit" value="delete">
            </form>
            {{--<a href="{{action('BuildController@destroy',[$builds[$i]['id']])}}"> delete </a>--}}
        </div>
    </div>
@stop

