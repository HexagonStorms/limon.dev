@extends('layouts.master')

@section('title', 'Limon Development | Home')

@section('content')

    <div class="container-fluid p-0" style="height: 3000px">

        <div class="landscape">
            <div class="landscape layers" data-parallax-strength="0.6">

                <div class="layer skrollable skrollable-between canvas-rocks" data--900="transform:translate3d(0,-120px,0)" data-900="transform:translate3d(0,120px,0)">
                    <img width="100%" src="/img/rocks2.png" />
                </div>

                <div class="layer skrollable skrollable-between canvas-greenery"
                     data--900="transform:translate3d(0,-10px,0)" data-900="transform:translate3d(0,10px,0)">
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
                <a class="navbar-brand mr-1" href="#">Josue's Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="//codeply.com">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"></span>
        </nav>

        <section id="blurb" class="row bg-primary position-relative justify-content-center about-section">
            <div  class="col-sm-8 text-center">
                <h2>
                    <span class="line-1 item" style="opacity: 0; transform: matrix(1, 0, 0, 1, -50, 50);">DESIGNER &</span>
                    <span class="line-2 item" style="opacity: 0; transform: matrix(1, 0, 0, 1, -50, 50);">DEVELOPER</span>
                    <span class="line-3 item" style="opacity: 0; transform: matrix(1, 0, 0, 1, -50, 50);">I'M JOSUE</span>
                    <hr class="item" style="opacity: 0; transform: matrix(1, 0, 0, 1, -50, 50);">
                </h2>
                <p class="text-left item">
                    My passion is creating beautiful applications that tell a <b>story</b>.
                </p>
                <p class="text-left item">
                    Each is crafted with a bug-free guarantee, SEO ready, & with my support every step of the way.
                </p>
            </div>
        </section>

        <div class="position-relative" id="test">
            <svg id="" preserveAspectRatio="xMidYMax meet" class="svg-separator sep2" viewBox="0 0 1600 200" style="display: block;" data-height="200">
                <polygon class="" style="fill: rgb(52, 58, 64);" points="-4,0 1604,198 1604,204 -4,204 	"></polygon>
                <polygon class="" style="opacity: 1;fill: #6d93c1;" points="1604,198 1604,186 -4,0 -4,0 	"></polygon>
                <polygon class="" style="opacity: 1;fill: #533b75;" points="1604,186 1604,174 -4,0 -4,0 	"></polygon></svg>
        </div>

        <section class="row bg-dark create-section justify-content-center">
            <div class="col-md-3">
                <h2 class="text-center">Past Work</h2>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/250" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/249" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/248" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <h2>What I Do</h2>
            </div>
        </section>
    </div>
@endsection
