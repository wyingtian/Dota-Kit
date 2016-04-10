@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Heroes</h2>
            <div class="grid-container" style="display:block;">
                <ul class="rig columns-6">
                    @foreach ($items as $item)
                        <li>
                            <a href="{{action('ItemController@show',[$item->id]) }}">
                                <img class="draggable_item" id="draggable{{$item['id']}}" id="draggable" data-html="true" data-toggle="tooltip"
                                     title="<strong>{{$item['name']}} </strong> <p>Cost: {{$item['cost']}}</p> <p>{{$item['desc']}}</p> "
                                     src="{{$item['pic_url']}}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
@stop
