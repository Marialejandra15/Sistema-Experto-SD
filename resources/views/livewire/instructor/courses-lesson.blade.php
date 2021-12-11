<div>
    @foreach ($section->lessons as $item)

        <article class="card">
            <div class="card-body">

                @if($lesson->id == $item->id)
                    <input type="text" class="form-input">
                @else
                    <header>
                        <h1> <i class="far fa-play-circle text-blue-500"></i> Lección: {{ $item->name }}</h1>
                    </header>

                    <div>
                        <hr class="my-2">

                        <p class="text-sm">Plataforma: {{ $item->plataform->name }}</p>
                        <p class="text-sm">Enlace: <a class="text-blue-600" href="{{ $item->url }}" target="_blank">{{ $item->url }}</a></p>

                        <div class="mt-2">
                            <button class="btn btn-blue text-sm" wire:click="edit({{$item}})">Editar</button>
                            <button class="btn btn-red text-sm">Eliminar</button>
                        </div>

                    </div>

                @endif
            </div>

        </article>

    @endforeach
</div>
