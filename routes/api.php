<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\SubjectteacherController;
use App\Http\Controllers\YearBlockController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('teacher', TeacherController::class);
Route::apiResource('room', RoomController::class);
Route::apiResource('course', CourseController::class);
Route::apiResource('schedule', ScheduleController::class);
Route::apiResource('task', TaskController::class);
Route::apiResource('yearblock', YearBlockController::class);
Route::apiResource('subjectteacher', SubjectteacherController::class);

Route::post('/users/login', [ApiUserController::class, 'login']);
Route::post('/users/reset', [ApiUserController::class, 'sendPasswordResetLink']);
Route::post('/users/check-email', [ApiUserController::class, 'checkEmailAvailability']);
Route::apiResource('users', ApiUserController::class);

Route::apiResource('parking', ParkingController::class);
Route::put('parking/{id}/available', [ParkingController::class, 'available']);
Route::put('parking/{id}/occupied', [ParkingController::class, 'occupied']);

Route::apiResource('registrar', RegistrarController::class);
