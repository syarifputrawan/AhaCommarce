<?php

use App\Http\Controllers\KontakController;
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

Route::post('/kontak_store', [KontakController::class, 'store']);

Route::get('/dashboard', function () {
    return view('backend.layouts.content ');
});

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/projek', function () {
    return view('frontend.projek');
});
Route::get('/kontak', function () {
    return view('frontend.kontak');
});

