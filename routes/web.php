<?php

use App\Http\Controllers\StudentController;
use Illuminate\Database\Capsule\Manager;
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

Route::get('/', [StudentController::class,"get_all_student"]);
Route::get('student/{id}/edit',[StudentController::class, "get_student_by_id"]);
Route::put('student/{id}/edit',[StudentController::class, "edit"]);
