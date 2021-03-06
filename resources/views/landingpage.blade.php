@extends('layouts.main')
@section('landingpage')
<div class="container py-5">
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active"
                aria-current="true" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active"
                aria-current="true" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="width: auto; height:75vh">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('image/hotel1.jpg')}}">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('image/hotel2.jpg')}}">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('image/hotel3.jpg')}}">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

@include('partials.about')
@include('partials.thumbrooms')
@include('facilities')
@endsection
