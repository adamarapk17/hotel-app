<?php

namespace App\Http\Controllers;

use App\Models\FacilitiesAdmin;
use App\Models\Form;
use Illuminate\Http\Request;
use App\Models\Rooms;


class AdminController extends Controller
{
    public function show_dashboard() {
        return view(
            'admin.dashboard_admin',
            [
                "title" => "Dashboard",
                'rooms' => Rooms::all(),
                'facilities' => FacilitiesAdmin::all(),
                'ongoing' => Form::where('status', 'checkin')->get(),
                'history' => Form::where('status', 'checkout')->get(),
                'available' => count(Rooms::all()) - count(Form::where('status', 'checkin')->get())
            ]
    
    );
    }

    public function show_rooms_admin() {
        return view(
            'admin.rooms_admin',
            ["title" => "Rooms"]
        );
    }

    public function show_detailrooms() {
        return view('admin.detailrooms');
    }

    public function show_facilities_admin() {
        return view('admin.facilities_admin');
    }

    public function show_addrooms() {
        return view('admin.addrooms');
    }

    public function show_addfacilities() {
        return view('admin.addfacilities');
    }

    public function show_adddetailrooms() {
        return view('admin.adddetailrooms');
    }
































}
