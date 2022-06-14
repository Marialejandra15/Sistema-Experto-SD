<section>
    <h1 class="text-2xl font-bold">Metas del curso</h1>
    <hr class="mt-2 mb-6">

    @foreach ($course->goals as $item)
        <article class="card mb-4">
            <div class="card-body bg-gray-100">
                @if($goal->id == $item->id)
                    <form wire:submit.prevent="update">
                        <input type="text" wire:model="goal.name" class="form-input w-full">
                    </form>
                    @error('goal.name')
                        <span class="text-sm text-red-500"> {{ $message }} </span>
                    @enderror
                @else
                <header class="flex justify-between">
                    <h1>{{ $item->name }}</h1>
                    <div>
                        <i wire:click="edit({{ $item }})" class="fas fa-edit text-blue-500 cursor-pointer"></i>
                        <i wire:click="destroy({{ $item }})" class="fas fa-trash text-red-500 cursor-pointer ml-2"></i>
                    </div>
                </header>
                @endif
            </div>
        </article>
    @endforeach
    <article class="card">
        <div class="card-body bg-gray-100">

            <form wire:submit.prevent="store">
                <input wire:model="name" type="text" class="form-input w-full" placeholder="Nombre de la meta">
                @error('name')
                    <span class="text-sm text-red-500"> {{ $message }} </span>
                @enderror
                <div class="flex justify-end mt-1">
                    <button type="submit" class="btn btn-blue mt-4">Agregar meta</button>
                </div>
            </form>

        </div>
    </article>
</section>
