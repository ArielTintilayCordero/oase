<?php

use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\admin\HotelController;
use App\Http\Controllers\admin\OperatorController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SubserviceController;
use App\Http\Controllers\admin\VoucherController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class,'index']);


Route::resource('hoteles', HotelController::class)->names('admin.hoteles');

Route::resource('countries', CountryController::class)->names('admin.countries');
Route::resource('clients', ClientController::class)->names('admin.clients');

Route::resource('subservices', SubserviceController::class)->names('admin.subservices');
Route::resource('services', ServiceController::class)->names('admin.services');

Route::resource('operators', OperatorController::class)->names('admin.operators');

Route::resource('vouchers', VoucherController::class)->names('admin.vouchers');
