<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstallController;
use App\Http\Controllers\TokenController;

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

Route::get("/", function () {return view("welcome");});
Route::get('/install', [InstallController::class, 'handleinstallApp']);
Route::get('/oauth/callback', [TokenController::class, 'handleinstallApp']);
Route::get('/success', function () {return view('success');});
