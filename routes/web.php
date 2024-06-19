<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\ClientController;

// Route::get('/formclient', [ClientController::class, 'create']);
// Route::post('/formclient', [ClientController::class, 'store'])->name('formclient.store');


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

// Route::get('index', function () {
//     return view('index');
// });
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('formclient', function () {
//     return view('formclient');
// });
Route::get('invoice', function () {
    return view('invoice');
});
Route::get('forminvoice', function () {
    return view('forminvoice');
});
Route::resource('pekerja', PekerjaController::class);
Route::resource('client', ClientController::class);
// Route::get('formpekerja', function (){
//     return view('formpekerja');
// });