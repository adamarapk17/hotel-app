<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;

use Carbon\Carbon;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rooms_admin', [
            "title" => "Rooms",
            'rooms' => Rooms::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addrooms', [
            "title" => "Rooms"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = date('YmdHi') . $file->getClientOriginalName();

            $validatedData = $request->validate([
                'nama_tipe' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required|integer',
                'jumlah' => 'required|integer',
                'gambar' => 'mimes:jpeg,bmp,png'
            ]);

            $validatedData['gambar'] = $filename;

            Rooms::create($validatedData);

            $file->move(public_path('admin/images'), $filename);
        }

        // Kamar::create($validatedData);
        return redirect('/rooms_admin')->with('success', 'Tambah kamar berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rooms = Rooms::find($id);
        $rooms->delete();
        return redirect('/rooms_admin')->with('success', 'Kamar berhasil dihapus!');
    }
}