@extends('layouts.main_admin')
@section('addfacilities')
<div class="card container card-judul" >
    <div>
        <h1 class="text-white text-1 mb-4">Add facilities</h1>
    </div>
</div>
<div class="card card-add mb-3 container" style="max-width: 800px">
    <div class="row g-0">
        <div class="col-5">
            <img class="gambar-facilities" src="{{asset('image/economy.jpg')}}">
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

                                <div class="col mb-3">
                                    <label for="jmlkamar" class="form-label text-center text-white">Facilities Name</label>
                                    <input type="text" class="form-control rounded-10 center" id="jmlkamar">
                                </div>


                                <div class="col mb-3">
                                    <label for="jmlkamar" class="form-label text-center text-white">Facilities Description</label>
                                    <input type="text" class="form-control rounded-10 center" id="jmlkamar">
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
