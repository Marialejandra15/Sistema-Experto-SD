<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class InstructorCourses extends Component
{
    public function render()
    {
        $courses = Course::where('user_id', auth()->user()->id)->get();
        return view('livewire.instructor-courses', compact('courses'));
    }
}
