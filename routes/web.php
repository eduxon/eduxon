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
    return view('index');
})->name('dashboard.index');

Route::get('/students', function () {
    return view('students');
})->name('dashboard.students');

Route::get('/parents', function () {
    return view('parents');
})->name('dashboard.parents');

Route::get('/teachers', function () {
    return view('teachers');
})->name('dashboard.teachers');

// Student Route...
Route::get('/students/all-students', 'StudentController@get_All_Students')->name('student.all-student');
Route::get('/students/student-details', 'StudentController@get_student_detail')->name('student.student-details');
Route::get('/students/student-admission-form', 'StudentController@get_admission_form')->name('student.admission-form');
Route::get('/students/student-promotion', 'StudentController@get_student_promotion')->name('student.student-promotion');

// Teachr Route
Route::get('/teachers/all-teachers', 'TeacherController@get_all_teachers')->name('teacher.all-teacher');
Route::get('/teachers/teacher-detail', 'TeacherController@get_teacher_detail')->name('teacher.teacher-details');
Route::get('/teachers/add-teacher-form', 'TeacherController@get_add_teacher_form')->name('teacher.add-teacher');
Route::get('/teachers/teacher-payment', 'TeacherController@get_teacher_payment')->name('teacher.teacher-payment');

// Parent Route
Route::get('/parents/all-parents', 'ParentController@get_all_parents')->name('parent.all-parents');