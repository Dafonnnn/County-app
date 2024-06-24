<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ClientController;

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
Route::get('/', [AuthController::class, 'index'])->name("login-view");
Route::post('/login-account', [AuthController::class, 'login'])->name("login-account");
Route::get('/logout', [AuthController::class, 'logout'])->name("logout-account");

Route::get('/invoice', [InvoiceController::class, 'index'])->name("invoice");
Route::get('/forminvoice', [InvoiceController::class, 'create'])->name('form-invoice');
Route::post('/create-invoice', [InvoiceController::class, 'insertdata'])->name('create-invoice');
Route::get('/edit-invoice/{id}', [InvoiceController::class, 'show'])->name('edit-invoice');
Route::post('/update-invoice/{id}', [InvoiceController::class, 'update'])->name('update-invoice');
Route::get('/delete-invoice/{id}', [InvoiceController::class, 'delete'])->name('delete-invoice');

Route::post('/insertdata',[InvoiceController::class, 'store'])->name('insertdata');
Route::resource('/pekerja', PekerjaController::class);
Route::resource('/client', ClientController::class);
// Route::get('formpekerja', function (){
//     return view('formpekerja');
// });
