@extends('layouts.master')
@section('head')
    <link rel="stylesheet" href="/css/hero.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <a  href="/item">Back</a>
            <br>
            <h2>{{$item['name']}} </h2>
            <img class="center" src="{{$item['pic_url']}}" alt="item image"> <br>

            <p>Cost: {{$item['cost']}}</p>
            <p>Description: {{$item['desc']}}</p>
            <p>Quality: {{$item['qual']}}</p>
            <p>Notes: {{$item['notes']}}</p>
            <p>cd: {{$item['cd']}}</p>
            <p>Story: {{$item['lore']}}</p>
        </div>
    </div>
@stop
