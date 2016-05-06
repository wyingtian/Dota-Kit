@extends('layouts.master')
@section('head')
    <link rel="stylesheet" href="/css/hero.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h2>{{$hero['name']}} </h2>

            <img class="center" src="{{$hero['pic_url_lg']}}"> <br>
            <p>Type: {{$hero['atk_type']}} <br>
            Description: {{$hero['bio']}}</p>
        </div>
    </div>
@stop
