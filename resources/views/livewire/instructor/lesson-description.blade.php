<div>
    <article class="card" x-data="{open: false}">
        <div class="card-body bg-gray-100">
            <header>
                <h1 class="cursor-pointer" x-on:click="open = !open">Descripcion de la leccion</h1>
            </header>

            <div x-show="open">
                <hr class="my-2">

                @if($lesson->description)
                    <form wire:submit.prevent="update">
                        <textarea wire:model="description.name" class="form-input w-full"></textarea>

                        @error('description.name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex justify-end">
                            <button wire:click="destroy" class="btn btn-red text-sm" type="button">Eliminar</button>
                            <button class="btn btn-blue text-sm ml-2" type="submit">Actualizar</button>
                        </div>
                    </form>
                @else
                    <div>
                        <textarea wire:model="name" class="form-input w-full" placeholder="Agrege una descripcion a su leccion"></textarea>

                        @error('description.name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex justify-end">
                            <button wire:click="store" class="btn btn-blue text-sm ml-2" type="button">Agregar</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </article>
</div>
