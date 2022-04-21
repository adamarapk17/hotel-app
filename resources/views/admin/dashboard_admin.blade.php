@extends('layouts.main_admin')

@section('dashboard')

<div class="card container card-judul" >
    <div>
        <h1 class="text-white text-1 mb-4">Dashboard</h1>
    </div>
</div>
<div style="background-blue-800" class="card card-2 container ">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">

        <div class="card card-3 nav-item rounded-10 mt-5 me-3 mb-5" style="width: 16rem;">
            <div class="card-body text-white">
            <h1 class="card-title">{{ count($rooms)}}</h1>
                <p class="card-text">Total Rooms</p>
            </div>
        </div>
        <div class="card card-3 nav-item rounded-10 mt-5 me-3 mb-5" style="width: 16rem;">
            <div class="card-body text-white">
            <h1 class="card-title">{{ $available}}</h1>
                <p class="card-text">Rooms Available</p>
            </div>
        </div>
        <div class="card card-3 nav-item rounded-10 mt-5 me-3 mb-5" style="width: 16rem;">
            <div class="card-body text-white">
            <h1 class="card-title">{{ count($facilities)}}</h1>
                <p class="card-text">Total Facilities</p>
            </div>
        </div>
        @if (auth()->user()->role === 'admin')
        <div class="card card-3 nav-item rounded-10 mt-5 me-3 mb-5" style="width: 16rem;">
            <div class="card-body text-white">
            <h1 class="card-title">{{ count($history)}}</h1>
                <p class="card-text">Total past Customers</p>
            </div>
        </div>
        <div class="card card-3 nav-item rounded-10 mt-5 me-3 mb-5" style="width: 16rem;">
            <div class="card-body text-white">
                <h1 class="card-title">{{ count($ongoing)}}</h1>
                <p class="card-text">Total Visitiing Customers</p>
            </div>
        </div>
        @endif
    </ul>
</div>
@endsection
