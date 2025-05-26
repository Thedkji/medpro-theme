<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Route::view('/home', 'pages.home.home')->name('home');
Route::view('/business-health-check', 'pages.business-health-check.index')->name('business-health-check');
Route::view('/medical-booking', 'pages.medical-booking.index')->name('medical-booking');
Route::view('/make-an-appointment', 'pages.medical-booking.make-an-appointment')->name('make-an-appointment');
Route::view('/select-profile', 'pages.medical-booking.select-profile')->name('select-profile');
Route::view('/select-specialty', 'pages.medical-booking.select-specialty')->name('select-specialty');
Route::view('/select-service', 'pages.medical-booking.select-service')->name('select-service');
Route::view('/create-profile', 'pages.medical-booking.create-profile')->name('create-profile');
Route::view('/confirm-information', 'pages.medical-booking.confirm-information')->name('confirm-information');
Route::view('/payment-information', 'pages.medical-booking.payment-information')->name('payment-information');
