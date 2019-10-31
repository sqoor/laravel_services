@extends('layouts.app')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: -50px">

        <div class="carousel-inner w-auto">
            <div id="another-style" class="carousel-item active">
                <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2015/06/10/16/36/mark-804938_960_720.jpg"
                     alt="First slide">
            </div>
            <div id="another-style" class="carousel-item">
                <img class="d-block w-100"
                     src="https://cdn.pixabay.com/photo/2018/05/03/11/38/skills-3371153_960_720.jpg" alt="Second slide">
            </div>
            <div id="another-style" class="carousel-item">
                <img class="d-block w-100"
                     src="https://cdn.pixabay.com/photo/2018/03/08/07/08/brush-3207945_960_720.jpg" alt="Third slide">
            </div>
            <div id="another-style" class="carousel-item">
                <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2014/10/22/16/39/tools-498202_960_720.jpg"
                     alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="custom-css container d-flex h-100 justify-content-center align-content-center">
        {{--        <h1 class="text-muted text-center">Welcome at Your Service</h1>--}}
    </div>
@endsection
