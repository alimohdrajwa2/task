<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Student;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function viewStudents(Course $course)
    {
        $students = $course->students;
        return view('courses.students', compact('course', 'students'));
    }

    public function assignStudentForm(Course $course)
    {
        $students = Student::all();
        return view('courses.assign', compact('course', 'students'));
    }

    public function assignStudent(Course $course, Request $request)
    {
        $course->students()->attach($request->input('student_id'));
        return redirect()->route('courses.students', $course->id)->with('success', 'Student assigned successfully.');
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
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
