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
});

Route::group(['middleware' => ['admin', 'auth']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/accept', [AdminController::class, 'acceptView'])->name('admin.accept.view');
    Route::get('/admin/success', [AdminController::class, 'successView'])->name('admin.success.view');
    Route::get('/admin/reject', [AdminController::class, 'rejectView'])->name('admin.reject.view');
    Route::put('/admin/{id}/accept', [AdminController::class, 'accept'])->name('admin.accept');
    Route::put('/admin/{id}/reject', [AdminController::class, 'reject'])->name('admin.reject');
    Route::put('/admin/{id}/done', [AdminController::class, 'done'])->name('admin.done');
});



Route::post('/add_document', [RegistrarController::class, 'reserve']);
