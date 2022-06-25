<div class="mb-4">
    {!! Form::label('title', 'Título del curso') !!}
    {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1'.($errors->has('title') ? ' border-red-600' : '' )]) !!}

    @error('title')
        <strong class="text-xs text-red-600 font-bold">
            {{ $message }}
        </strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug del curso') !!}
    {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1'.($errors->has('slug') ? ' border-red-600' : '')]) !!}

    @error('slug')
        <strong class="text-xs text-red-600 font-bold">
            {{ $message }}
        </strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'Subtitulo del curso') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1'.($errors->has('subtitle') ? ' border-red-600' : '')]) !!}

    @error('subtitle')
        <strong class="text-xs text-red-600 font-bold">
            {{ $message }}
        </strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('description', 'Descripción del curso') !!}
    {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1'.($errors->has('description') ? ' border-red-600' : '')]) !!}

    @error('description')
        <strong class="text-xs text-red-600 font-bold">
            {{ $message }}
        </strong>
    @enderror
</div>

<div class="grid md:grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, null, ['class'=> 'form-input block w-full mt-1'.($errors->has('category_id') ? ' border-red-600' : '')]) !!}

        @error('category_id')
            <strong class="text-xs text-red-600 font-bold">
                {{ $message }}
            </strong>
        @enderror
    </div>

    <div>
        {!! Form::label('level_id', 'Niveles') !!}
        {!! Form::select('level_id', $levels, null, ['class'=> 'form-input block w-full mt-1'.($errors->has('level_id') ? ' border-red-600' : '')]) !!}

        @error('level_id')
            <strong class="text-xs text-red-600 font-bold">
                {{ $message }}
            </strong>
        @enderror
    </div>

    <div>
        {!! Form::label('price_id', 'Precios') !!}
        {!! Form::select('price_id', $prices, null, ['class'=> 'form-input block w-full mt-1'.($errors->has('price_id') ? ' border-red-600' : '')]) !!}

        @error('price_id')
            <strong class="text-xs text-red-600 font-bold">
                {{ $message }}
            </strong>
        @enderror
    </div>
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>

<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($course->image)
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{ Storage::url($course->image->url) }}" alt="">
        @else
            <img id="picture" class="w-full h64 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/11/14/03/16/book-1822474_960_720.jpg">
        @endisset
    </figure>
    <div>
        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi necessitatibus veniam quaerat
            alias, assumenda libero commodi explicabo iure, asperiores nemo officia inventore, officiis ex facilis
            sapiente dignissimos maxime repellat ut.</p>
        {!! Form::file('file', ['class' => 'form-input w-full'.($errors->has('file') ? ' border-red-600' : ''), 'id' => 'file', 'accept'=>'image/*']) !!}
    </div>
    @error('file')
        <strong class="text-xs text-red-600 font-bold">
            {{ $message }}
        </strong>
    @enderror
</div>
