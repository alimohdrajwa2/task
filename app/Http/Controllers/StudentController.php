<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Course;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function displayCourses(Student $student)
    {
        $courses = $student->courses;
        return view('students.courses', compact('student', 'courses'));
    }

    public function assignCourseForm(Student $student)
    {
        $courses = Course::all();
        return view('students.assign', compact('student', 'courses'));
    }

    public function assignCourse(Student $student, Request $request)
    {
        $student->courses()->attach($request->input('course_id'));
        return redirect()->route('students.courses', $student->id)->with('success', 'Course assigned successfully.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
