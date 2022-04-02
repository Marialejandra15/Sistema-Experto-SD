<x-app-layout>
    <section class="bg-gray-600 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                @if ($course->image)
                    <img class="h-60 w-full object-cover" src="{{ Storage::url($course->image->url) }}"
                        alt="{{ $course->title }}">
                @else
                    <img class="h-60 w-full object-cover" src="https://cdn.pixabay.com/photo/2016/11/14/03/16/book-1822474_960_720.jpg">
                @endif
            </figure>

            <div class="text-white">
                <h1 class="text-4xl">{{ $course->title }}</h1>
                <h2 class="text-xl mb-3">{{ $course->subtitle }}</h2>
                <p class="mb-2">
                    <i class="fas fa-chart-line"></i>
                    Nivel: {{ $course->level->name }}
                </p>
                <p class="mb-2">
                    <i class="fas fa-tags"></i>
                    Categoria: {{ $course->category->name }}
                </p>
                <p class="mb-2">
                    <i class="fas fa-users"></i>
                    Estudiantes: {{ $course->students_count }}
                </p>
                <p>
                    <i class="fas fa-star"></i>
                    Calificación: {{ $course->rating }}
                </p>
            </div>
        </div>
    </section>
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 order-2 lg:order-1">

            <section class="card mb-12">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">Lo que aprenderás</h1>

                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                        @forelse ($course->goals as $goal)
                            <li class="text-gray-700 text-base">
                                <i class="fas fa-check text-gray-600 mr-2"></i>
                                {{ $goal->name }}
                            </li>
                        @empty
                            <li class="text-gray-700 text-base">
                                Este curso no tiene asignado ninguna meta
                            </li>
                        @endforelse
                    </ul>

                </div>
            </section>

            <section>
                <h1 class="font-bold text-3xl mb-2">Temario</h1>
                @forelse ($course->sections as $section)
                <article class="mb-4 shadow" @if($loop->first)
                    x-data="{ open: true }"
                    @else
                    x-data="{ open: false }"
                    @endif>
                    <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200"
                        x-on:click="open = !open">
                        <h1 class="font-bold text-lg text-gray-600">{{ $section->name }}</h1>
                    </header>

                    <div class="bg-white py-2 px-4" x-show="open">
                        <ul>
                            @foreach ($section->lessons as $lesson)
                            <li class="text-gray-700 text-base">
                                <i class="fas fa-play-circle mr-2 text-gray-600 mb-2"></i>
                                {{ $lesson->name }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </article>
                @empty
                <div class="card">
                    <div class="card-body">
                        Este curso no tiene ninguna seccion
                    </div>
                </div>
                @endforelse
            </section>

            <section class="mb-8">
                <h1 class="font-bold text-3xl">Requisitos</h1>

                <ul class="list-disc list-inside">
                    @forelse ($course->requirements as $requirement)
                    <li class="text-gray-700 text-base">{{ $requirement->name }}</li>
                    @empty
                    <li class="text-gray-700 text-base">Este curso no tiene ningun requerimiento</li>
                    @endforelse
                </ul>
            </section>

            <section class="mb-8">
                <h1 class="font-bold text-3xl">Descripción</h1>

                <div class="text-gray-700 text-base">
                    {!! $course->description !!}
                </div>
            </section>

        </div>

        <div class="order-1 lg:order-2 col-span-1">
            <section class="card">
                <div class="card-body">
                    <img class="h-12 w-12 object-cover rounded-full shadow-lg"
                        src="{{ $course->teacher->profile_photo_url }}" alt="{{ $course->teacher->name }}">
                    <div class="ml-4">
                        <h1 class="font-bold text-gray-500 text-lg">Prof. {{ $course->teacher->name }}</h1>
                        <a class="text-blue-400 text-sm font-bold" href="">{{ '@' . Str::slug($course->teacher->name)
                            }}</a>
                    </div>

                    <form action="{{ route('admin.courses.approved', $course) }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="btn btn-red w-full">Aprovar curso</button>
                    </form>

                </div>

            </section>

        </div>
</x-app-layout>
