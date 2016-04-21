@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
        <img src="{{$hero['pic_url_lg']}}"> <br>
        <strong>{{$hero['name']}} </strong>
            <p>Attack type: {{$hero['atk_type']}}</p>
            <p>Description: {{$hero['bio']}}</p>
        </div>
    </div>
@stop
