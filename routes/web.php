<?php

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index'); 

Route::resource('classes', 'ClassesController');

Route::resource('classrooms', 'ClassroomsController');

Route::resource('levels', 'LevelController');

Route::resource('batches', 'BatcheController');

Route::resource('shifts', 'ShiftController');

Route::resource('courses', 'CourseController');

Route::resource('faculties', 'FacultyController');

Route::resource('times', 'TimeController');

Route::resource('attendances', 'AttendanceController');

Route::resource('academics', 'AcademicController');

Route::resource('days', 'DayController');

Route::resource('classAssignings', 'ClassAssigningController');

Route::resource('classSchedulings', 'ClassSchedulingController');

Route::resource('transactions', 'TransactionController');

Route::resource('admissions', 'AdmissionController');

Route::resource('teachers', 'TeacherController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');

Route::resource('semesters', 'SemesterController');

Route::resource('classSchedulings', 'ClassSchedulingController');

Route::resource('classSchedulings', 'ClassSchedulingController');

Route::get('/dynamicLevel', ['as' => 'dynamicLevel', 'uses' => 'ClassSchedulingController@DynamicLevel']);

Route::get('/class_schedulings/edit', ['as' => 'edit', 'uses' => 'ClassSchedulingController@edit']);

Route::post('/class_schedulings/update', ['as' => 'update', 'uses' => 'ClassSchedulingController@update']);

