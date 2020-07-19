<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/pres_inas', function () {
    return view('pres_inas');
});
Route::get('/mot_dir', function () {
    return view('mot_dir');
});
Route::get('/miss_inas', function () {
    return view('miss_inas');
});