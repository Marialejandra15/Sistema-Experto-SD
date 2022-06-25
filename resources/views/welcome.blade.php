<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('images/bg/library-869061_1920.jpg'); }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Las mejores historias en un solo lugar</h1>
                <p class="text-white text-lg mt-2 mb-4">Aqui podras encontrar obras un gran repertorio de cuentos e historias de todos los generos</p>
                    @livewire('search')
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('images/bg/baby-5953965_640.jpg') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Para todas las edades</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                    explicabo optio mollitia nam. Suscipit adipisci cum velit labore similique molestias</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('images/bg/knight-2565957_640.jpg') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Las mejores historias</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                    explicabo optio mollitia nam. Suscipit adipisci cum velit labore similique molestias</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('images/bg/skull-1193784_640.jpg') }}"
                        alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Todos los generos</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                    explicabo optio mollitia nam. Suscipit adipisci cum velit labore similique molestias</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('images/bg/pointing-4190930_640.jpg') }}"
                        alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Tu puedes formar parte</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                    explicabo optio mollitia nam. Suscipit adipisci cum velit labore similique molestias</p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-3xl text-white">¿Quieres ver nuestro catálogo de cuentos?</h1>
        <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto,
            asperiores.</p>
        <div class="flex justify-center">
            <a href="{{ route('courses.index') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-6">
                Catálogo de cuentos
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS CUENTOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Los mejores cuentos a tu disposición</p>

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course" />
            @endforeach
        </div>

    </section>

</x-app-layout>
