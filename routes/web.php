<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

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

// Route to list students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Route to list courses
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('/students/{student}/courses', [StudentController::class, 'displayCourses'])->name('students.courses');

// Route to assign a course to a student
Route::get('/students/{student}/assign', [StudentController::class, 'assignCourseForm'])->name('students.assign');

// Route to handle the form submission for assigning a course to a student
Route::post('/students/{student}/assign', [StudentController::class, 'assignCourse'])->name('students.assign.course');

// Route to view students of a course
Route::get('/courses/{course}/students', [CourseController::class, 'viewStudents'])->name('courses.students');

// Route to assign a student to a course
Route::get('/courses/{course}/assign', [CourseController::class, 'assignStudentForm'])->name('courses.assign');

// Route to handle the form submission for assigning a student to a course
Route::post('/courses/{course}/assign', [CourseController::class, 'assignStudent'])->name('courses.assign.student');

// Task 2 Routes are here .

Route::get('/task2', function() {
    return view('task2.index');
})->name('task2.index');


