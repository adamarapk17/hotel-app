<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RecepController;
use App\Http\Controllers\TamuController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::resource('/rooms_admin', RoomsController::class);
Route::get('/facilities_admin', [AdminController::class, 'show_facilities_admin']);
Route::get('/detailrooms', [AdminController::class, 'show_detailrooms']);
Route::get('/addrooms', [AdminController::class, 'show_addrooms']);
Route::get('/addfacilities', [AdminController::class, 'show_addfacilities']);
Route::get('/adddetailrooms', [AdminController::class, 'show_adddetailrooms']);

//Receptionist
Route::get('/receptionist', [RecepController::class, 'show_receptionist']);
Route::get('/order_recep', [RecepController::class, 'show_order_recep']);
Route::get('/order_ongoing', [RecepController::class, 'show_order_ongoing']);
Route::get('/order_history', [RecepController::class, 'show_order_history']);

//Main
Route::get('/', [TamuController::class, 'show_beranda']);
Route::get('/form', [FormController::class, 'create']);
Route::get('/kamar', [TamuController::class, 'show_kamar']);
Route::post('/submit_form', [FormController::class, 'store']);
Route::get('/order', [TamuController::class, 'show_resi']);
Route::get('/buknow', [FormController::class, 'show_buknow']);

//Login
Route::get('/login', [LoginController::class, 'show_login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);































// Route::get('/', function () {
//     return view('landingpage');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/rooms', function () {
//     return view('rooms');
// });

// Route::get('/buknow', function () {
//     return view('partials.buknow');
// });

// Route::get('/order', function () {
//     return view('order');
// });

// Route::get('/admin', function () {
//     return view('admin.dashboard_admin');
// });

// Route::get('/rooms_admin', function () {
//     return view('admin.rooms_admin');
// });

// Route::get('/detailrooms', function () {
//     return view('admin.detailrooms');
// });

// Route::get('/facilities_admin', function () {
//     return view('admin.facilities_admin');
// });

// Route::get('/receptionist', function () {
//     return view('receptionist.dashboard');
// });

// Route::get('/order_recep', function () {
//     return view('receptionist.order_recep');
// });

// Route::get('/order_ongoing', function () {
//     return view('receptionist.order_ongoing');
// });

// Route::get('/order_history', function () {
//     return view('receptionist.order_history');
// });

// Route::get('/addrooms', function () {
//     return view('admin.addrooms');
// });

// Route::get('/adddetailrooms', function () {
//     return view('admin.adddetailrooms');
// });

// Route::get('/addfacilities', function () {
//     return view('admin.addfacilities');
// });





// Route::group(['middleware' => ['auth']], function() {
//     Route::get('/dashboard', [AdminController::class, 'show_dashboard']);

//     Route::get('/kamar_admin', [AdminController::class, 'show_kamar_admin']);

//     Route::get('/kelas_kamar', [AdminController::class, 'show_kelas_kamar']);

//     Route::get('/fasilitas_kamar', [AdminController::class, 'show_fasilitas_kamar']);

//     Route::get('/fasilitas_hotel', [AdminController::class, 'show_fasilitas_hotel']);

//     Route::get('/dashboard_resepsionis', [ResepsionisController::class, 'show_dashboard_resepsionis']);

//     Route::get('/ongoing', [ResepsionisController::class, 'show_ongoing']);

//     // Route::get('/pending', [ResepsionisController::class, 'show_pending']);

//     Route::resource('/pending', FormController::class);

//     Route::get('/history', [ResepsionisController::class, 'show_history']);
// });
