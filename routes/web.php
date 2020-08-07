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
    return view('interface');
});
Route::get('/interface', function () {
    return view('interface');
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
Route::get('/historique', function () {
    return view('historique');
});
Route::get('/les-instances-de-gouvernance', function () {
    return view('instances_gouvernance');
});
Route::get('/filiere', function () {
    return view('filiére');
});
Route::get('/les-departement', function () {
    return view('departement');
});
Route::get('/formation_initiale', function () {
    return view('formation_initiale');
});
Route::get('/formation_continue', function () {
    return view('formation_continue');
});
Route::get('/admis', function () {
    return view('admis');
});
Route::get('/inas-en-chiffres', function () {
    return view('chiffres');
});
    
// Route::get('/inscription', function () {
//     return view('inscri');
// });

Route::resource('admission', 'admissionController');

// Route::get('/next-step', function () {
//     return view('next-step');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
