@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Heroes</h2>
            <div class="grid-container" style="display:block;">
                <ul class="rig columns-6">
                    @foreach ($heroes as $hero)
                        <li>
                            <a href="{{action('HeroController@show',[$hero->id]) }}"> <img class="draggable_hero" id="draggable{{$hero['id']}}" data-html="true" data-toggle="tooltip"
                                 title="<strong>{{$hero['name']}} </strong> <p>Attack: {{$hero['atk_type']}}</p>"
                                 src="{{$hero['pic_url_sm']}}">
                                </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
@stop
