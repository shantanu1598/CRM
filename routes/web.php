<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\UserController;
use App\Http\Controllers\test;
use App\Http\Controllers\ExternalApiCall;

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


Route::View('','crm');
Route::post('submit',[UserController::class, 'save']);
//Route::post('test',[test::class, 'testapi']);

