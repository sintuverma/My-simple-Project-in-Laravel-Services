<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\WhatWeDoController;
use App\Http\Controllers\FileUploadController;
//use controller classes for use there function in url

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
//file upload rote
Route::get('/uploadfile',[FileUploadController::class, 'myfile']);
Route::post('/uploadfile',[FileUploadController::class, 'uploadFile']);


Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/pricing',[PricingController::class, 'index']);
Route::get('/whatwedo',[WhatWeDoController::class, 'index']);
