<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AmbientController;
use App\Http\Controllers\HourGroupController;

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

Route::get('/', function () {
    return view('template.template');
});

//ruta para docentes

Route::resource('profesores', TeacherController::class);

//ruta para materias

Route::resource('materias', SubjectController::class);

//ruta grupos

Route::resource('grupos', GroupController::class);

//Ruta ambiente

Route::resource('ambientes', AmbientController::class);

//Ruta hora_grupos
Route::resource('hora_grupos', HourGroupController::class);

