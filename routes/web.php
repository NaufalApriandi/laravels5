<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Box;

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

Route::get( '/', function () {
    return view('welcome');
});

Route::view('tes2', 'melcome');

Route::get('/tes', function () {
    return "asik";
});

Route::get('percobaan', [Box::class, 'coba']);
Route::get('box', [Box::class, 'index']);