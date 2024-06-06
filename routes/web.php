<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register','register')->name('register');
    Route::post('register','registerSave')->name('register.save');

    Route::get('login','login')->name('login');
    Route::post('login','loginAction')->name('login.action');



    //logout route
    //for logout https://www.youtube.com/watch?v=I-ClCOsMzeE&t=1389s&ab_channel=Cairocoders
    Route::get('logout','logout')->middleware('auth')->name('logout');
});

//Patients Home Page Route
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
});

//Admin Home Route
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
});

// Route::get('home', [AuthController::class, 'loginAction'])->name('home');
// Route::get('/admin', [AuthController::class, 'loginAction'])->name('adminHome');



