<x-instructor-layout :course="$course">

    <div>
        @livewire('instructor.course-goals', ['course' => $course], key('course-goals'.$course->id))
    </div>

    <div class="mt-4">
        @livewire('instructor.course-requirements', ['course' => $course], key('courses-requirements'.$course->id))
    </div>

    <div>
        @livewire('instructor.course-audiences', ['course' => $course], key('course-audiences'.$course->id))
    </div>

</x-instructor-layout>
