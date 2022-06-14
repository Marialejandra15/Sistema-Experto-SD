<?php

use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\Instructor\CoursesCurriculum;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'Instructor/courses' );

Route::resource('courses', CourseController::class);
Route::get('courses/{course}/curriculum', CoursesCurriculum::class)->name('courses.curriculum');

Route::post('courses/{course}/status', [CourseController::class, 'status'])->name('courses.status');

Route::get('courses/{course}/goals', [CourseController::class, 'goals'])->name('courses.goals');
