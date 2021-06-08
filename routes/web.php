<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentalsController;
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
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
//Route::get('officer/home', [HomeController::class, 'officerHome'])->name('officer.home')->middleware('userLevel');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('officer/home', [HomeController::class, 'officerHome'])->name('officer.home');
Route::get('vehicles/create', [VehicleAdvertisementsController::class, 'create'])->name('vehicles.create');


