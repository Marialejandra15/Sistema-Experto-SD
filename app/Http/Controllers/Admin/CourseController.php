<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::where('status', 2)->paginate();
        return view('admin.courses.index', compact('courses'));
    }

    public function show(Course $course){
        return view('admin.courses.show', compact('course'));
    }

    public function approved(Course $course){
        $course->status = 3;
        $course->save();
        return redirect()->route('admin.courses.index');
    }
}
