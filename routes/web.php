<?php

use App\Http\Controllers\DataKamarController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
        
Route::get('admin', function () { return view('form.admin'); })->middleware('checkRole:admin');
Route::get('penjual', function () { return view('form.penjual'); })->middleware(['checkRole:penjual,admin']);
Route::get('pembeli', function () { return view('form.pembeli'); })->middleware(['checkRole:pembeli,admin']);
Route::resource('data-kamar', DataKamarController::class);
