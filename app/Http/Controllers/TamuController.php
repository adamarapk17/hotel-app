<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function show_beranda() 
    {
        return view('landingpage');
    }

    public function show_form() 
    {
        return view('buknow');
    }

    public function show_kamar() 
    {
        return view('rooms');
    }

    public function show_resi() 
    {
        return view('order');
    }
}
