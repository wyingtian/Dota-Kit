@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a  href="/home">Back</a>
            <h2>Items</h2>
            <div class="grid-container">
                <ul class="rig columns-10">
                    @foreach ($items as $item)
                        <li>
                            <a href="{{action('ItemController@show',[$item->id]) }}">
                                <img alt="item image" data-html="true" data-toggle="tooltip"
                                     title="<strong>{{$item['name']}} </strong> <br> <b>Cost: {{$item['cost']}}</b> <b>{{$item['desc']}}</b> "
                                     src="{{$item['pic_url']}}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
