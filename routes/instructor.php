<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\InstructorCourses;

Route::redirect('', 'Instructor/courses' );
Route::get('courses', InstructorCourses::class)->middleware('can:Leer cursos')->name('courses.index');
