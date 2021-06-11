<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentalsController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\VehicleAdvertisementsController;
use App\Models\User;
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

Route::get('/', function () {
    return view('layouts.app');
});




Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'loginValidate'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('registration', [AuthController::class, 'store'])->name('register.post');
//Route::post('officer/create', [AuthController::class, 'createOfficer'])->name('officer.create');
Route::post('add/officer', [AuthController::class, 'storeOfficer'])->name('officer.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('officer/home', [HomeController::class, 'officerHome'])->name('officer.home');


Route::get('officer/all', [HomeController::class, 'officerAll'])->name('officer.all');
Route::get('edit-officer/{id}', [HomeController::class, 'editOfficer']);
Route::get('delete-officer/{id}', [HomeController::class, 'deleteOfficer']);
//Route::get('officer/home', [HomeController::class, 'officerHome'])->name('officer.home')->middleware('userLevel');


Route::get('vehicles/create', [VehicleAdvertisementsController::class, 'create'])->name('vehicles.create');
Route::get('vehicles/all', [VehicleAdvertisementsController::class, 'index'])->name('vehicles.all');
Route::get('admin/vehicles', [VehicleAdvertisementsController::class, 'adminList'])->name('admin.allvehicles');
Route::get('details/{id}', [VehicleAdvertisementsController::class, 'show']);


Route::post('update-officer/{id}', [HomeController::class, 'updateOfficer'])->name('officer.update');

Route::get('request-create/{id}', [RentalsController::class, 'create']);
Route::post('request-post/{id}', [RentalsController::class, 'store']);
Route::get('requests/unconfirmed', [RentalsController::class, 'unconfirmedRentalsAdmin'])->name('requests.unconfirmed');
Route::get('requests/confirmed', [RentalsController::class, 'confirmedRentalsAdmin'])->name('requests.confirmed');
Route::get('request-confirm/{id}', [RentalsController::class, 'edit']);
Route::get('request-return/{id}', [RentalsController::class, 'update']);


Route::get('customer/confirmed', [RentalsController::class, 'confirmedRentals'])->name('customer.requestconfirmed');
Route::get('customer/unconfirmed', [RentalsController::class, 'index'])->name('customer.requestunconfirmed');
Route::get('drivers/all', [DriversController::class, 'index'])->name('drivers.all');



