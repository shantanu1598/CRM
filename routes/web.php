<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\UserController;
use App\Http\Controllers\test;
use App\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\ExternalApiCall;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\VerifyOtp;

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


Route::View('','authwithotp');

Route::post('/search',[DeviceController::class,'mainSearch']);

Route::post('/sendOtp',[VerifyOtp::class,'verifyUser']);
Route::post('/verifyOtp',[VerifyOtp::class,'verifyOtp']);


Route::post('/submit',[UserController::class,'save']);

Route::get('/checkstatus', function(){
    return view('checkstatus');
});