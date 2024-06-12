<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PekerjaController;

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

Route::get('index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('formclient', function () {
    return view('formclient');
});
Route::get('invoice', function () {
    return view('invoice');
});
Route::get('forminvoice', function () {
    return view('forminvoice');
});
Route::resource('pekerja', PekerjaController::class);
// Route::get('formpekerja', function (){
//     return view('formpekerja');
// });