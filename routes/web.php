<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrarController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::post('/logout', [RegistrarController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [RegistrarController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});



Route::post('/add_document', [RegistrarController::class, 'reserve']);
