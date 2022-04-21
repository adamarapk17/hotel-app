@extends('layouts.main_receptionist')
@section('order_recep')

<div class="card container card-judul" >
    <div>
        <h1 class="text-white text-1 mb-4">Order</h1>
    </div>
</div>
<div class="container">
    <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active bg-light text-dark" aria-current="page" href="/order_recep">Waiting</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/order_ongoing">Ongoing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="/order_history">History</a>
    </li>
  </ul>
</div>
<div>
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
       {{ session('success') }}
    </div>
 @endif
    <form method="GET">
        <div class="container" style="margin-top: 50px">
            <div class="d-flex flex-row float-end">
                <div class="d-flex flex-row">
                    <input type="text" class="form-control rounded-10 form-brown btn-putih me-1" id="cari"
                        aria-describedby="button-addon2">
                    <button class="btn btn-putih me-1" type="button" id="button-addon2">Search</button>
                </div>
                <button class="btn btn-putih" type="button" id="button-addon2">+ add data</button>
            </div>
        </div>
    </form>
    <form method="GET">
        <div class="container" style="margin-top: 50px">
            <div class="d-flex flex-row">
                <div class="d-flex flex-row">
                    <input type="date" class="form-control rounded-10 form-brown btn-putih me-1" id="tanggal"
                        aria-describedby="button-addon2">
                </div>
            </div>
        </div>
    </form>
    <div class="card container card-1 rounded-20 mt-4">
        <div class="card-body">
            <table class="table table-hover table-responsive form-brown text-white">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Type Rooms</th>
                        <th scope="col">Total Rooms</th>
                        <th scope="col">Check-in Date</th>
                        <th scope="col">Check-out Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($forms) > 0)
                    @foreach ($forms as $form)
                    <tr>
                        <th class="align-middle" scope="row">{{ $loop->iteration }}</th>
                        <td class="align-middle">{{ $form->nama_tamu }}</td>
                        <td class="align-middle">{{ $form->tipe_kamar }}</td>
                        <td class="align-middle">{{ $form->jumlah_kamar }}</td>
                        <td class="align-middle">{{ $form->tgl_checkin }}</td>
                        <td class="align-middle">{{ $form->tgl_checkout }}</td>
                        <td class="align-middle">
                            <form action="/waiting/update/{{ $form->id }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-putih rounded-10">Check
                                   In</button>
                             </form>
                             <form action="/waiting/delete/{{ $form->id }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-putih rounded-10"
                                   onclick="return confirm('Apakah Anda yakin akan menolak tamu ini?')">No</button>
                             </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                       <tr>
                          <td colspan="9" class="text-center">Tidak Ada Data</td>
                       </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
