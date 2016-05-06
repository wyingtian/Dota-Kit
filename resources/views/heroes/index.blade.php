@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Heroes</h2>
            <div class="grid-container">
                <ul class="rig columns-6">
                    @foreach ($heroes as $hero)
                        <li>
                            <a href="{{action('HeroController@show',[$hero->id]) }}"> <img alt="hero image" data-html="true" data-toggle="tooltip"
                                 title="<strong>{{$hero['name']}} </strong> <br><b>Attack: {{$hero['atk_type']}}</b>"
                                 src="{{$hero['pic_url_sm']}}">
                                </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
@stop
