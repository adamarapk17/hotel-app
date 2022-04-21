@extends('layouts.main')
@section('rooms')
<div class="container">
    <div class="card card-image" style="margin-top: 100px">
        <div class="row g-0">
            <div class="col-5">
                <img class="gambar-rooms" style="border-radius: 40px 0px 0px 40px" src="{{asset('image/economy.jpg')}}">
            </div>
            <div class="col-7">
                <div class="card-body">
                    <h2 class="card-title text-center">Economy</h2>
                    <p>Wifi : No</p>
                    <p>Breakfast : No</p>
                    <p>Available: 10</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-image" style="margin-top: 100px">
        <div class="row g-0">
            <div class="col-5">
                <img class="gambar-rooms" style="border-radius: 40px 0px 0px 40px" src="{{asset('image/superior.jpg')}}">
            </div>
            <div class="col-7">
                <div class="card-body">
                    <h2 class="card-title text-center">Superior</h2>
                    <p>Wifi : Yes</p>
                    <p>Breakfast : No</p>
                    <p>Available: 10</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-image" style="margin-top: 100px">
        <div class="row g-0">
            <div class="col-5">
                <img class="gambar-rooms" style="border-radius: 40px 0px 0px 40px" src="{{asset('image/Suite.jpg')}}">
            </div>
            <div class="col-7">
                <div class="card-body">
                    <h2 class="card-title text-center">Suite</h2>
                    <p>Wifi : Yes</p>
                    <p>Breakfast : Yes</p>
                    <p>Available: 10</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
