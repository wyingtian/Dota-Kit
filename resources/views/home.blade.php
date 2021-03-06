@extends('layouts.master')
@section('head')
    <link rel="stylesheet" href="/css/home.css">
@endsection
@section('content')
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <h1 class="text-center"> Welcome to Dota2 Kits! </h1>
                <p>Let's explore the massive database of Dota2 heroes and items.</p>
            @if(Auth::check())
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <a  href="/build">See Your Saved Build </a>
                        <br><br>
                        <a  href="/build/create">Create a new build</a>
                        <br>
                        <br>
                    </div>
                @else
                    <p><a href="/login">Log in</a> to create your customized build</p>
                    <br>
                @endif
        </div>
        <div class="row ">
            <br><br> <br><br>
            <div class="col-md-3 col-md-offset-3 text-center ">
                <img class="img-responsive center" src="images/hero.jpg" alt="hero image">
                <a href="/hero">See All Heroes</a>
            </div>
            <div class="col-md-3 text-center">
                <img class="img-responsive center" src="images/item.jpg" alt="item image">
                <a href="/item">See All Items</a>
            </div>
        </div>
    </div>
@endsection
