<div>
    @foreach ($section->lessons as $item)

        <article class="card mt-4">
            <div class="card-body" x-data="{open: false}">

                @if($lesson->id == $item->id)
                    <form wire:submit.prevent="update">
                        <div class="flex items-center">
                            <label class="w-32">Nombre:</label>
                            <input wire:model="lesson.name" type="text" class="form-input w-full">
                        </div>

                        @error('lesson.name')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex items-center mt-4">
                            <label class="w-32">Plataforma:</label>
                            <select wire:model="lesson.plataform_id" class="form-input w-full">
                                @foreach ($plataforms as $platform)
                                    <option value="{{$platform->id}}">
                                        {{$platform->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center mt-4">
                            <label class="w-32">URL:</label>
                            <input wire:model="lesson.url" type="text" class="form-input w-full">
                        </div>

                        @error('lesson.url')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                        <div class="mt-4 flex justify-end">
                            <button type="button" class="btn btn-red" wire:click="cancel">Cancelar</button>
                            <button type="submit" class="btn btn-blue ml-2" >Actualizar</button>
                        </div>
                    </form>
                @else
                    <header>
                        <h1 class="cursor-pointer" x-on:click="open = !open"> <i class="far fa-play-circle text-blue-500"></i> Lección: {{ $item->name }}</h1>
                    </header>

                    <div x-show="open">
                        <hr class="my-2">

                        <p class="text-sm">Plataforma: {{ $item->plataform->name }}</p>
                        <p class="text-sm">Enlace: <a class="text-blue-600" href="{{ $item->url }}" target="_blank">{{ $item->url }}</a></p>

                        <div class="my-2">
                            <button class="btn btn-blue text-sm" wire:click="edit({{$item}})">Editar</button>
                            <button class="btn btn-red text-sm" wire:click="destroy({{$item}})">Eliminar</button>
                        </div>

                        <div class="mb-4">
                            @livewire('instructor.lesson-description', ['lesson' => $item], key('lesson-description'.$item->id))
                        </div>

                        <div>
                            @livewire('instructor.lesson-resources', ['lesson' => $item], key('lesson-resources'.$item->id))
                        </div>
                    </div>

                @endif
            </div>

        </article>

    @endforeach

    <div x-data="{open: false}" class="mt-4">
        <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar nueva seccion
        </a>

        <article class="card" x-show="open">
            <div class="card-body">
                <h1 class="text-xl font-bold mb-4">Agregar nueva leccion</h1>
                <div class="mb-4">
                    <div class="flex items-center">
                        <label class="w-32">Nombre:</label>
                        <input wire:model="name" type="text" class="form-input w-full">
                    </div>

                    @error('name')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror

                    <div class="flex items-center mt-4">
                        <label class="w-32">Plataforma:</label>
                        <select wire:model="plataform_id" class="form-input w-full">
                            @foreach ($plataforms as $platform)
                                <option value="{{$platform->id}}">
                                    {{$platform->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    @error('plataform_id')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror

                    <div class="flex items-center mt-4">
                        <label class="w-32">URL:</label>
                        <input wire:model="url" type="text" class="form-input w-full">
                    </div>

                    @error('url')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror

                </div>

                <div class="flex justify-end">
                    <button x-on:click="open = false" class="btn btn-red" >Cancelar</button>
                    <button class="btn btn-blue ml-2" wire:click="store" >Agregar</button>
                </div>
            </div>
        </article>
    </div>
</div>
