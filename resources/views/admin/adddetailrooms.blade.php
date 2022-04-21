@extends('layouts.main_admin')
@section('adddetailrooms')
<div class="card container card-judul" >
    <div>
        <h1 class="text-white text-1 mb-4">Add Detail Rooms</h1>
    </div>
</div>
<div class="card card-add mb-3 container" style="max-width: 800px">
    <div class="row g-0">
        <div class="col-5">
            <img class="gambar-detail" src="{{asset('image/economy.jpg')}}">
        </div>
        <div class="col-7">
            <form>
                <div class="container">
                    <div class="card container card-add" style="max-width: 500px">
                        <div class="row g-3 align-items-center">
                            <div class="row g-3 align-items-center">
                                <div class="mb-3">
                                    <label for="tipe_kamar" class="form-label text-white">Choose File Image</label>
                                    <select class="form-select rounded-10" aria-label="Default select example">
                                        <option selected>Choose Image</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="tipe_kamar" class="form-label text-white">Add Facilities</label>
                                    <select class="form-select rounded-10" aria-label="Default select example">
                                        <option selected>Open this to add</option>
                                        <option value="1">Wifi</option>
                                        <option value="2">Breakfast</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="tipe_kamar" class="form-label text-white">Rooms</label>
                                    <select class="form-select rounded-10" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">Economy</option>
                                        <option value="2">Superior</option>
                                        <option value="3">Suite</option>
                                    </select>
                                </div>

                                <div class="mt-5">
                                    <a class="btn btn-putih rounded-10 mb-3">Add</a>
                                    <a class="btn btn-putih rounded-10 mb-3">Edit</a>
                                    <a class="btn btn-putih rounded-10 mb-3">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


