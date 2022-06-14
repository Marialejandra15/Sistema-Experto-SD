<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <div class="container py-8 grid md:grid-cols-5 gap-4">
            <aside>
                <h1 class="font-bold text-lg mb-4">Edición del curso</h1>
                <ul>
                    <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.edit', $course) border-indigo-400 @else border-transparent  @endif pl-2">
                        <a href="{{ route('instructor.courses.edit', $course) }}">Información del curso</a>
                    </li>
                    <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.curriculum', $course) border-indigo-400 @else border-transparent  @endif pl-2">
                        <a href="{{ route('instructor.courses.curriculum', $course) }}">Lecciones del curso</a>
                    </li>
                    <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.goals', $course) border-indigo-400 @else border-transparent  @endif pl-2" pl-2">
                        <a href="{{ route('instructor.courses.goals', $course) }}">Metas del curso</a>
                    </li>
                    {{-- <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                        <a href="">Estudiantes</a>
                    </li> --}}
                </ul>

                @switch($course->status)
                    @case(1)
                        <form action="{{route('instructor.courses.status', $course)}}" method="POST">
                            @csrf
                            <button class="btn btn-red" type="submit">Solicitar revision</button>
                        </form>
                        @break
                    @case(2)
                        <div class="card text-gray-500">
                            <div class="card-body">
                                Este curso esta encuentra en revision
                            </div>
                        </div>
                        @break
                    @case(3)
                        <div class="card text-gray-500">
                            <div class="card-body">
                                Este curso esta encuentra publicado
                            </div>
                        </div>
                        @break

                    @default

                @endswitch

            </aside>

            <main class="col-span-4 card">

                <div class="card-body text-gray-600">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    @stack('modals')

    @livewireScripts

    @isset($js)
        {{ $js }}
    @endisset
</body>

</html>
