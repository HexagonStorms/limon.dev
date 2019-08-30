@extends('layouts.master')

@section('title', 'Limon Development | Home')

@section('content')

    <div class="container-fluid p-0" style="height: 3000px">

        <div class="landscape">
            <div class="landscape layers" data-parallax-strength="0.6">

                <div class="layer skrollable skrollable-between canvas-rocks" data--900="transform:translate3d(0,-150px,0)" data-900="transform:translate3d(0,150px,0)">
                    <img width="100%" src="/img/rocks2.png" />
                </div>

                <div class="layer skrollable skrollable-between canvas-greenery"
                     data--900="transform:translate3d(0,-110px,0)" data-900="transform:translate3d(0,110px,0)">
                    @include('landscape.greenery')
                </div>

                <div class="layer skrollable skrollable-between canvas-hay" data--900="transform:translate3d(0,-125px,0)" data-900="transform:translate3d(0,125px,0)">
                    @include('landscape.hay')
                </div>


                <div class="layer skrollable skrollable-between canvas-trees">
                    <img class="canvas-trees-img" width="100%" src="/img/trees2.png" />
                </div>


                <div class="layer skrollable skrollable-between canvas-leaves">
                    @include('landscape.leaves')
                </div>

            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="d-flex w-50 order-0">
                <a class="navbar-brand mr-1" href="#">Bootstrap 4</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Link <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="//codeply.com">Codeply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
            <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last">always show</span>
        </nav>

        <div class="row pt-5 bg-primary position-relative">
            <div class="col text-center">
                <h2>About Me</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, dicta est. Commodi corporis cum est hic inventore ipsa nihil omnis quia quisquam reprehenderit velit, voluptates. Amet autem omnis possimus quod? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eaque eos et expedita id impedit magni quia sequi sint totam. Aut cumque ex excepturi illum nemo non obcaecati, saepe vero.
                </p>
            </div>
        </div>
    </div>
@endsection
