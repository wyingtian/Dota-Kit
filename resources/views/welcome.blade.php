@extends('layouts.master')
@section('content')

    <div class="col-md-6">
        <h2>Heroes</h2>
    <div class="grid-container" style="display:block;">
        <ul class="rig columns-6">
            @foreach ($heroes as $hero)
                <li>
                <img  data-html="true" data-toggle="tooltip" title="<strong>{{$hero['name']}} </strong> <p>Attack: {{$hero['atk_type']}}</p> " src="{{$hero['pic_url_lg']}}" />
                {{--<p>{{$hero['name']}}</p>--}}
                </li>
            @endforeach
        </ul>
    </div>
    </div>


    <div class="col-md-6">
        <h2>Items</h2>
        <div  class="grid-container" style="display:block;">
            <ul class="rig columns-10">
    @foreach ($items as $item )
        <li>
            <img  data-html="true" data-toggle="tooltip" title="<strong>{{$item['name']}} </strong> <p>Cost: {{$item['cost']}}</p> <p>{{$item['desc']}}</p> " src="{{$item['pic_url']}}" />
        </li>
        @endforeach
            </ul>
        </div>
    </div>
@stop


