@extends('layouts.master')
@section('content')
    <div class="row">
        <form method='POST' action='/build'>
            {{ csrf_field() }}


            <div class="col-md-2 col-md-offset-2">
                <br>
                <div id="droppable_hero" class="ui-widget-content">
                    <p>Drop one Hero here</p>
                </div>
            </div>

            <input id='build_hero' type='hidden' name='build_hero'>
            <div class=" col-md-6 ">
                <br>
                <div id="droppable_item" class="ui-widget-content">
                    <p>Drop Items here <br><br><br><br></p>
                </div>
            </div>
            <input id='build_items' type='hidden' name='build_items'>

            <div class="col-md-4 col-md-offset-4">
                <br>
                <input type='submit' value='Submit'>
            </div>

        </form>
    </div>
    @if ($errors->any())
        <br>
        <div class="col-md-offset-2 col-md-8">
            <ul class='alert alert-danger'>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <h2>Heroes</h2>
            <div class="grid-container" style="display:block;">
                <ul class="rig columns-6">
                    @foreach ($heroes as $hero)
                        <li>
                            <a href="{{action('HeroController@show',[$hero->id]) }}">
                                <img class="draggable_hero"
                                     id="draggable{{$hero['id']}}"
                                     data-html="true"
                                     data-toggle="tooltip"
                                     title="<strong>{{$hero['name']}} </strong> <p>Attack: {{$hero['atk_type']}}</p>"
                                     src="{{$hero['pic_url_sm']}}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>


        <div class="col-md-5">
            <h2>Items</h2>
            <div class="grid-container">
                <ul class="rig columns-10">
                    @foreach ($items as $item )
                        <li>
                            <img class="draggable_item" id="draggable{{$item['id']}}" id="draggable"
                                 data-html="true" data-toggle="tooltip"
                                 title="<strong>{{$item['name']}} </strong> <p>Cost: {{$item['cost']}}</p> <p>{{$item['desc']}}</p> "
                                 src="{{$item['pic_url']}}">

                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@stop



