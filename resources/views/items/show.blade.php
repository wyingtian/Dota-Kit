@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <img src="{{$item['pic_url']}}"> <br>
            <br>
            <strong>{{$item['name']}} </strong>
            <p>Cost: {{$item['cost']}}</p>
            <p>Description: {{$item['desc']}}</p>
            <p>Quality: {{$item['qual']}}</p>
            <p>Notes: {{$item['notes']}}</p>
            <p>cd: {{$item['cd']}}</p>
            <p>Story: {{$item['lore']}}</p>
        </div>
    </div>
@stop
