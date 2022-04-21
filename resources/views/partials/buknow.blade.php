@extends('layouts.main')
@section('buknow')
<div class="row">
    <div class="col">
        <div class="card card-form shadow container float-start"
            style="margin-top: 100px; width:500px; margin-left:50px; margin-bottom:100px">
            <h2 class="text-center mt-4 mb-4">Book Now</h2>
            <form action="/submit_form" method="POST">
                @csrf
                <div class="row g-3 align-items-center">
                    <div class="col mb-3">
                        <label for="tgl_checkin" class="form-label text-center">Check-In</label>
                        <input type="date"
                            class="@error('tgl_checkin') is-invalid @enderror form-control rounded-10 center"
                            id="tgl_checkin" required autofocus value="{{ old('tgl_checkin') }}">
                            @error('tgl_checkin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" col mb-3">
                        <label for="tgl_checkout" class="form-label text-center">Check-Out</label>
                        <input type="date" name="tgl_checkout"
                            class="@error('tgl_checkout') is-invalid @enderror form-control rounded-10 center"
                            id="tgl_checkout" required value="{{ old('tgl_checkout') }}">
                        @error('tgl_checkout')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="jumlah_kamar" class="form-label text-center">Total Rooms</label>
                        <input type="number" name="jumlah_kamar"
                            class="@error('jumlah_kamar') is-invalid @enderror form-control rounded-10 center"
                            id="jumlah_kamar" min="1" required value="{{ old('jumlah_kamar') }}">
                        @error('jumlah_kamar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row g-3 align-items-center">
                        <div class="mb-3">
                            <label for="nama_tamu" class="form-label">Customer Name</label>
                            <input type="text" name="nama_tamu"
                        class="@error('nama_tamu') is-invalid @enderror form-control rounded-10"
                        id="nama_tamu" required value="{{ old('nama_tamu') }}">
                    @error('nama_tamu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                        </div>

                        <div class="mb-3">
                            <label for="no_telepon" class="form-label">Phone Number</label>
                            <input type="number" name="no_telepon"
                        class="@error('no_telepon') is-invalid @enderror form-control rounded-10"
                        id="no_telepon" required value="{{ old('no_telepon') }}">
                    @error('no_telepon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tipe_kamar" class="form-label">Rooms</label>
                            <select class="form-select rounded-10" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">Economy</option>
                                <option value="2">Superior</option>
                                <option value="3">Suite</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <button type="submit" style="border-radius: 5px" class="btn btn-primary float-end mt-4 mb-3 p5">Book
                Now</button>
        </div>

        <div class="card col card-rooms container shadow float-end"
            style="margin-top: 100px; width:650px; margin-right: 70px; margin-bottom:100px">
            <div class="card-body">
                <h2 class="text-center mt-3 mb-5 text-white">Rooms</h2>
                <div class="card card-image mb-3">
                    <div class="row g-0">
                        <div class="col-5">
                            <img class="gambar-rooms" src="{{asset('image/economy.jpg')}}">
                        </div>
                        <div class="col-7">
                            <div class="card-body">
                                <h5 class="card-title text-center">Economy</h5>
                                <p>Wifi : No</p>
                                <p>Breakfast : No</p>
                                <p>Available: 10</p>
                                <h3 class="text-end">RP 100.000,00</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-image mb-3">
                    <div class="row g-0">
                        <div class="col-5">
                            <img class="gambar-rooms" src="{{asset('image/Superior.jpg')}}">
                        </div>
                        <div class="col-7">
                            <div class="card-body">
                                <h5 class="card-title text-center">Superior</h5>
                                <p>Wifi : Yes</p>
                                <p>Breakfast : No</p>
                                <p>Available: 10</p>
                                <h3 class="text-end">RP 200.000,00</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-image mb-3">
                    <div class="row g-0">
                        <div class="col-5">
                            <img class="gambar-rooms" src="{{asset('image/suite.jpg')}}">
                        </div>
                        <div class="col-7">
                            <div class="card-body">
                                <h5 class="card-title text-center">Suite</h5>
                                <p>Wifi : Yes</p>
                                <p>Breakfast : Yes</p>
                                <p>Available: 10</p>
                                <h3 class="text-end">RP 500.000,00</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
