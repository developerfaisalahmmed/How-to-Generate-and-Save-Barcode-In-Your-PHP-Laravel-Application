<?php

use App\Http\Controllers\BarcodeControler;
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

//Route::get('/', function () {
//    return view('welcome');
//})->name('new.barcode');


Route::get('/',[BarcodeControler::class,'index'])->name('barcode');
Route::get('/barcode',[BarcodeControler::class,'create'])->name('new.barcode');
Route::post('/barcode',[BarcodeControler::class,'store'])->name('store.barcode');
