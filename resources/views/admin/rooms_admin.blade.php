@extends('layouts.main_admin')
@section('rooms_admin')

<div class="card container card-judul" >
    <div>
        <h1 class="text-white text-1 mb-4">Rooms</h1>
    </div>
</div>
<div>
    <form>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
           {{ session('success') }}
        </div>
     @endif
        <div class="container" style="margin-top: 50px">
            <label for="cari" class="form-label text-white">Search</label>
            <div class="d-flex flex-row">
                <div class="d-flex flex-row">
                    <input type="text" class="form-control rounded-10 form-brown btn-putih me-1" id="cari"
                        aria-describedby="button-addon2">
                    <button class="btn btn-putih me-1" type="button" id="button-addon2">Search</button>
                </div>
                <a href="/addrooms" class="btn btn-putih" id="button-addon2">+ add data</a>
            </div>
        </div>
    </form>
    
    <div class="card card-1 container">
        <div class="card-body">
            <table class="table table-hover table-responsive form-brown text-white">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Type Rooms</th>
                        <th scope="col">Total Rooms</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($rooms) > 0)
                        @foreach ($rooms as $rooms)
                        <tr>
                            <th class="align-middle" scope="row">{{ $loop->iteration }}</th>
                            <td class="align-middle">{{ $rooms->nama_tipe }}</td>
                            <td class="align-middle">{{ $rooms->jumlah }}</td>
                            <td>
                                <a href="" class="btn btn-putih rounded-10">Edit</a>
                                <form action="/rooms_admin_delete/{{ $rooms->id }}" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-putih rounded-10"
                                    onclick="return confirm('Apakah Anda yakin akan menghapus kamar ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    @else
                       <tr>
                          <td colspan="5" class="text-center">Tidak Ada Data</td>
                       </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
