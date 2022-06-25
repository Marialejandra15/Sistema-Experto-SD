<div class="container">
    <x-table-responsive title="Cursos">

        <div class="px-6 py-4 flex">
            <input wire:keydown="limpiarPage" wire:model="search" type="text" class="form-input flex-1 shadow-sm"
                placeholder="Ingrese el nombre de un curso">
            <a class="btn btn-red ml-2" href="{{ route('instructor.courses.create') }}">Crear nuevo curso</a>
        </div>
        @if($courses->count())
        <table class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                <tr>
                    <th style="width: 10%;" class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Nombre</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Matriculados</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Califición</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Status</div>
                    </th>
                    <th class="p-2 whitespace-nowrap"> </th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
                @foreach ($courses as $course)
                <tr>
                    <td class="p-2 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3">
                                @isset($course->image)
                                <img class="rounded-full" src="{{ Storage::url($course->image->url) }}">
                                @else
                                <img class="rounded-full"
                                    src="https://cdn.pixabay.com/photo/2016/11/14/03/16/book-1822474_960_720.jpg"
                                    alt="">
                                @endisset
                            </div>
                            <div>
                                <div class="font-medium text-gray-800">{{ $course->title }}</div>
                                <p class="text-gray-600 text-sm">{{ $course->category->name }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 whitespace-nowrap">
                        <div class="text-left text-gray-700">
                            {{ $course->students->count() }}
                            <i class="fas fa-users ml-2"></i>
                        </div>
                    </td>
                    <td class="p-2 whitespace-nowrap">
                        <ul class="flex text-sm">
                            <li class="mr-1">
                                <i class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray' }}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray' }}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'gray' }}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray' }}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{ $course->rating >= 5 ? 'yellow' : 'gray' }}-400"></i>
                            </li>
                        </ul>
                        <p class="text-gray-600 text-sm">Valoración del curso</p>
                    </td>
                    <td class="p-2 whitespace-nowrap text-center">
                        @switch($course->status)
                        @case(1)
                        <span
                            class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-lg bg-red-200 text-gray-900">
                            Borrador
                        </span>
                        @break
                        @case(2)
                        <span
                            class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-lg bg-yellow-200 text-gray-900">
                            Revisión
                        </span>
                        @break
                        @case(3)
                        <span
                            class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-lg bg-green-200 text-gray-900">
                            Publicado
                        </span>
                        @break

                        @default

                        @endswitch
                    </td>
                    <td class="p-2 whitespace-nowrap text-center">
                        <a class="text-indigo-600 text-base hover:text-blue-900 font-bold"
                            href="{{ route('instructor.courses.edit', $course) }}">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-5 py-4">
            {{ $courses->links() }}
        </div>
        @else
        <div class="text-center text-gray-700 font-bold">No se encontraron resultados</div>
        @endif
    </x-table-responsive>
</div>
