<?php

use App\Http\Controllers\HitungController;
use App\Http\Controllers\TestController;
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














Route::get('/', function() {
    return view ('welcome');
})-> name('home');

Route::get('/pendataan', function() {
    return view ('pendataan');
})-> name('pendataan');
Route::get('/', [HitungController::class, 'hitung']);
Route::get('/daftar', [TestController::class, 'daftar']);
Route::post('/kirim', [TestController::class, 'kirim']);

