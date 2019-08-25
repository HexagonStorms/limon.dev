@extends('layouts.master')

@section('title', 'Limon Development | Home')

@section('content')

    <div class="container-fluid p-0" style="height: 3000px">

        <div class="landscape layers" data-parallax-strength="0.6">

            <div class="layer skrollable skrollable-between canvas-rocks">
                <img width="100%" src="/img/rocks2.png" />
            </div>

            <div class="layer skrollable skrollable-between canvas-greenery"
                 data--900="transform:translate3d(0,-40px,0)" data-900="transform:translate3d(0,40px,0)">
                @include('landscape.greenery')
            </div>

            <div class="layer skrollable skrollable-between canvas-hay" data--900="transform:translate3d(0,15px,0)" data-900="transform:translate3d(0,-15px,0)">
                @include('landscape.hay')
            </div>


            <div class="layer skrollable skrollable-between canvas-trees">
                @include('landscape.trees')
            </div>


            <div class="layer skrollable skrollable-between canvas-leaves">
                @include('landscape.leaves')
            </div>

        </div>
    </div>


    <!-- Navbar -->
    {{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
        {{--<a class="navbar-brand" href="#">Navbar</a>--}}
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}

        {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
            {{--<ul class="navbar-nav mr-auto">--}}
                {{--<li class="nav-item active">--}}
                    {{--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Link</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--Dropdown--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                        {{--<a class="dropdown-item" href="#">Action</a>--}}
                        {{--<a class="dropdown-item" href="#">Another action</a>--}}
                        {{--<div class="dropdown-divider"></div>--}}
                        {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<form class="form-inline my-2 my-lg-0">--}}
                {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
                {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</nav>--}}
@endsection
