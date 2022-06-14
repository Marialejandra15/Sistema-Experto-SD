<x-app-layout>

    <div class="container py-8">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold">CREAR NUEVO CUENTO</h1>
                <hr class="mt-2 mn-6">

                {!! Form::open(['route'=>'instructor.courses.store', 'files' => true, 'autocomplete' => 'off']) !!}

                    {!! Form::hidden('user_id', auth()->user()->id) !!}

                    @include('instructor.courses.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Crear un nuevo cuento', ['class' => 'btn btn-blue cursor-pointer']) !!}
                    </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/instructor/courses/form.js') }}"></script>
    </x-slot>
</x-app-layout>
