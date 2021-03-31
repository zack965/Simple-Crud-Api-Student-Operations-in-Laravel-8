<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//get all students
Route::get('students',[StudentController::class, 'GetStudents']);
//get specefic student
Route::get('students/{id}',[StudentController::class, 'GetStudentsById']);
//Add student
Route::post('students',[StudentController::class, 'AddStudent']);
//Update Student
Route::put('Updatestudents/{id}',[StudentController::class, 'UpdateStudent']);
Route::delete('Deletestudents/{id}',[StudentController::class, 'DeleteStudent']);
