<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('classrooms', App\Http\Controllers\ClassroomsController::class);
Route::resource('students', App\Http\Controllers\StudentsController::class);
Route::resource('curriculums', App\Http\Controllers\CurriculumsController::class);
Route::resource('schedules', App\Http\Controllers\SchedulesController::class);
Route::resource('resources', App\Http\Controllers\ResourcesController::class);
Route::resource('messages', App\Http\Controllers\MessagesController::class);
Route::resource('settings', App\Http\Controllers\SettingsController::class);
