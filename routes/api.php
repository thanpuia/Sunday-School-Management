<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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



Route::resource('/department', DepartmentController::class);
Route::resource('/teacher', TeacherController::class);
Route::resource('/student', StudentController::class);

Route::get('teacherByDepartment/{departmentId}',[TeacherController::class,'showTeacherByDepartment']);
Route::get('studentByTeacher/{studentId}',[StudentController::class,'showStudentByTeacher']);