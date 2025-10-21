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
    return view('home');
});
Route::get('/details', function () {
    return view('details');
});
Route::get('/ajouter', function () {
    return view('ajouter');
})->name("Ajouter");
Route::get('/supprimer', function () {
    return view('supprimer');
});
Route::get('/modifier', function () {
    return view('modifier');
});
