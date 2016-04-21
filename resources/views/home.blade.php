@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
              <h1> Welcome to Dota2 Kits! </h1>
                <p>With this application, you can explore the massive database of Dota2 heroes and items.</p>
                <p>Create your customized build when you login</p>
            </div>
        </div>
        <div class="row">
            <br><br> <br><br>
            <div class="col-md-3 col-md-offset-3 ">
                <img class="img-responsive center" src="images/hero.jpg" alt="hero image">
                <a href="/hero">See All Heroes</a>
            </div>
            <div class="col-md-3 ">
                <img class="img-responsive center" src="images/item.jpg" alt="item image">
                <a href="/item">See All Items</a>
            </div>
        </div>
    </div>
    </div>
@endsection
